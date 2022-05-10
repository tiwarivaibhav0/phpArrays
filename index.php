<?php
  $arr1=array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
  $arr2=array('c4','c2');
  
  foreach($arr1 as $key => $val){
      if((array_search($key, $arr2))===FALSE){
          
          $res[$key]=$val;

      }
  }


   echo("Output : <br>");
   foreach($res as $key => $val){
       echo("$key :  $val <br>");
   
   }
   echo ("<br><br>");

   










?>