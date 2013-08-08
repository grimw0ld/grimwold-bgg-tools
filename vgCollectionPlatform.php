<?php

// --- Get POST variables ---

$username=$_POST['user'];
$targetPlat=$_POST['platform'];
if(!$targetPlat){$targetPlat="Wii";}
if(!$username){$username="grimwold";}


// --- Create Functions for videogame collection ---

function getVGGplatform($VGGuser)
  {
   $entry=0;
   $collection = array();
   $gameurl="http://videogamegeek.com/xmlapi2/collection?username=".$VGGuser."&subtype=videogame&version=1&own=1";
   if ($bggxml =  simplexml_load_file($gameurl))
     {
      foreach($bggxml->item as $b)
        {
         foreach($b->attributes() as $x => $y)
           {
            if($x=="objectid")
              {
               $gameID=$y;
               $collection[$entry]['ID'] = $gameID;
            //    echo "<br />".$collection[$entry]['ID'];
              }
           }
         foreach($b->name as $gameName)
           {
            $collection[$entry]['Title'] = $gameName;
          //   echo " - ".$collection[$entry]['Title'];
           }
         foreach($b->version as $c)
           {
            foreach($c->item as $d)
              {
               foreach($d->thumbnail as $gameThumb)
                 {
                  $collection[$entry]['Thumb'] = $gameThumb;
                 //  echo " - ".$collection[$entry]['Thumb'];
                 }
               $lnk=0;
               foreach($d->link as $e)
                 {
                  $flag=0;
                  foreach($e->attributes() as $m => $n)
                    {
                     if($n=="videogameplatform"){$flag=1;}
                     if($flag==1 && $m=="value")
                       {
                        $flag=0;
                        if($lnk==1)
                          {
                           $entry++;
                           $collection[$entry]['ID'] = $gameID;
                        //    echo "<br />".$collection[$entry]['ID'];
                           $collection[$entry]['Title'] = $gameName;
                        //    echo " - ".$collection[$entry]['Title'];
                           $collection[$entry]['Thumb'] = $gameThumb;
                        //    echo " - ".$collection[$entry]['Thumb'];
                          } 
                        $lnk=1;
                        $collection[$entry]['Platform'] = $n;
                        // echo " - ".$collection[$entry]['Platform'];
                       }
                    }
                 }
              }
           }
         $entry++;
        }
     }
   return $collection;
  }

$coll=getVGGplatform($username);
$len=count($coll);
$st=0;
while($st<$len)
  {
   if($coll[$st]['Platform']==$targetPlat)
     {
      echo "<br />";
//       echo $coll[$st]['Platform']." - ";
      echo '<a href="http://www.videogamegeek.com/videogame/'.$coll[$st]["ID"].'">'.$coll[$st]["Title"].'</a>';
     }
   $st++;
  }

?>