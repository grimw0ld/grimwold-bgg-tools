<?php


$sortArray=Array("alpha","thumbs","unsort","user");
$extraArray=Array("game","leader");

if(in_array($_POST['sort'],$sortArray)) {$sort=$_POST['sort'];}
else {$sort="thumbs";}
if(in_array($_POST['extra'],$extraArray)) {$extra=$_POST['extra'];}
else {$extra="";}

if(is_numeric($_POST['list'])) {$geeklist=$_POST['list'];}
else {$geeklist=22833;}

$listurl="http://www.boardgamegeek.com/xmlapi2/geeklist/".$geeklist;
$th=array();
$iid=array();
$oid=array();
$onm=array();
$unm=array();
$x=0;

if ($bggxml =  simplexml_load_file($listurl))
  {
   echo "<p>BGG is UP";
   foreach($bggxml->item as $c)
     {
      foreach($c->attributes() as $d => $e)
       {
        if($d=="id")
          {
          $iid[$x]=$e;
          }
        if($d=="username")
          {
          $unm[$x]=(string)$e;
          }

        if($d=="objectid")
          {
          $oid[$x]=$e;
          }
        else if($d=="objectname")
          {
          $onm[$x]=str_replace("The ","",$e);
          if($onm[$x]<>$e)$onm[$x]=$onm[$x].", The";
          $onm[$x]=str_replace(" & "," &amp; ",$e);
          }
        else if ($d=="thumbs")
          {
          $th[$x]=$e;
          }
       }
    $x++;
     }
   $len=count($onm);
   if($sort=="alpha")
     {
      array_multisort($onm,SORT_STRING,$th,$iid,$unm); 
      echo " - Sort alpha</p> \n";
     }
   else if($sort=="thumbs")
     {
      array_multisort($th,SORT_NUMERIC,SORT_DESC,$onm,$iid,$unm); 
      echo " - Sort thumbs</p> \n";
     }
   else if($sort=="user")
     {
      array_multisort($unm,SORT_STRING,$onm,$th,$iid); 
      echo " - Sort Username</p> \n";
     }
   else if($sort=="unsort")
     {
      echo " - Unsorted</p> \n";
     }
   $listTitle=$bggxml->title;
   echo "<p>Geeklist - $geeklist - $listTitle</p>";
   echo "<table> \n";
   echo "<tr><th class='c2'>Entry Name</th><th>Thumbs</th><th class='c1'>User</th></tr> \n";

   $y=0;
   While($y<$len)
     {
      echo "<tr><td><a href='http://boardgamegeek.com/geeklist/$geeklist/item/$iid[$y]#item$iid[$y]'>".$onm[$y]."</a>  </td><td class='c1'>".$th[$y]."</td><td class='c1'>&nbsp; <a href='http://boardgamegeek.com/user/$unm[$y]'>$unm[$y]</a></td></tr> \n";
      $y++;
     }
   echo "</table> \n &nbsp;<p>$x geeklist entries</p> \n";
  }


if($extra=="leader")
  {
   echo "<p class='header3c'>User Leaderboard</p>";
    $ldbd = array_count_values($unm);
    arsort($ldbd);
    foreach ($ldbd as $k => $v)
      {
        echo "$v $k<br />"; 
      }
  }

if($extra=="game")
  {
   echo "<p class='header3c'>Game Frequency</p>";
    $gmbd = array_count_values($onm);
    arsort($gmbd);
    foreach ($gmbd as $k => $v)
      {
        echo "$v $k<br />"; 
      }
  }

?>
