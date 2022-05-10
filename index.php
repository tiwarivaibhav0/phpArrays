<?php
  $arr=array(1,2,3,4,5);
  $pos=3;
  $insert=9;


   echo("Original Array");
   for($i=0;$i<count($arr);$i++)
        echo("$arr[$i] ");
       echo ("<br>");

   
  array_splice( $arr, $pos, 0, $insert); 

  echo("Array after Insertion ");
  for($i=0;$i<count($arr);$i++)
       echo("$arr[$i] ");
      echo ("<br>");











?>