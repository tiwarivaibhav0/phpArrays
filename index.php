<?php
  $arr=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
  
  


   echo("Recorded Temperatures");
   for($i=0;$i<count($arr);$i++)
        echo("$arr[$i] ");
        echo ("<br><br>");

   
   $avg =array_sum($arr)/count($arr);
        echo("Average Temperature is: $avg");
      
        echo ("<br><br>");

   sort($arr);
        echo("5 Lowest Temperatures");
        for($i=0;$i<5;$i++)
        echo("$arr[$i] ");
        echo ("<br><br>");
    
        rsort($arr);
        echo("5 Highest Temperatures");
        for($i=0;$i<5;$i++)
        echo("$arr[$i] ");
        echo ("<br><br>");











?>