<?php

// --- Get POST variables ---

$mindate=$_POST['mindate'];
$maxdate=$_POST['maxdate'];
$trgRnk=$_POST['trgRnk'];
$tgtpg=1 + $_POST['pages'];
if(!$trgRnk){$trgRnk=200;}
if(!$mindate){$mindate="2013-07-01";}
if(!$maxdate){$maxdate="2013-07-31";}
if(!$tgtpg){$tgtpg=2;}

// --- Define Functions ----

function getBGGrank($gameID)
  {
   $gameurl="http://boardgamegeek.com/xmlapi2/thing?id=".$gameID."&stats=1";
   if ($bggxml =  simplexml_load_file($gameurl))
     {
      foreach($bggxml->item as $b)
        {
         foreach($b->statistics as $c)
           {
            foreach($c->ratings as $d)
              {
               foreach($d->ranks as $e)
                 {
                  foreach($e->rank as $f)
                    {
                     $flag=0;
                     foreach($f->attributes() as $m => $n)
                       {
                        if($n=="boardgame"){$flag=1;}
                        if($flag==1 && $m=="value"){$flag=0; $BGGrank=$n;}
                       }
                    }
                 }
              }
           }
        }
     }
  // $BGGrank=$gameID / 68500 * 200;
   return $BGGrank;
  }


function listUniques($url,$trgRnk)
  {
   $file_handle = fopen($url, "r");
   $lineNo=0;
   $file_contents=array();
   $flg=0;
   while (!feof($file_handle)) 
     {
      $otTxt=trim(strip_tags(fgets($file_handle),'<a>'));
      $inTxt=strip_tags($otTxt);
      if($inTxt=='Unique users')
        {
         $flg=1;
        }
      if(substr($inTxt,-4,4)=='[10]')
        {
         $flg=0;
        }
      if($flg==1 && $inTxt!='Unique users')
        {
         if(!is_numeric($inTxt) && $inTxt != '')
           {
            $file_contents[$lineNo]=$otTxt;
            $lineNo++;
           }
         else if(is_numeric($inTxt))
          {
            $file_contents[$lineNo]=$inTxt;
            $lineNo++;
          }
        }
     }
   fclose($file_handle);

   $lp=0;
   $len=count($file_contents);
   while($lp<$len) 
     {
      if(!is_numeric($file_contents[$lp]) && $file_contents[$lp] != '')
       {
        $workStr=$file_contents[$lp];
        $urlex=explode("/",$workStr);
        $gameID=$urlex[2]."&nbsp;";
        $BGGrank=getBGGrank($gameID);
        if($BGGrank<$trgRnk || $BGGrank=="Not Ranked"){$rnk=0;} else {$rnk=1;}
        if($rnk==1)
          {
           echo "<br />";
           echo '<a href="http://www.boardgamegeek.com/boardgame/'.$gameID.'">';
           echo strip_tags($workStr);
           echo '</a>';
          } 
       }
      else if(is_numeric($file_contents[$lp]) && $rnk==1)
       {
        echo "&nbsp;";
        echo $file_contents[$lp];
       }
      $lp++;
   }
}

// --- Begin Code ---

$pg=1;
while($pg<$tgtpg)
  {
   $url='http://www.boardgamegeek.com/plays/bygame/subtype/boardgame/start/'.$mindate.'/end/'.$maxdate.'/page/'.$pg.'?sortby=distinctusers&subtype=boardgame';
   listUniques($url,$trgRnk);
   $pg++;
  }

?>