<?php
$arr1=array(1,2,3,4,5);
$del_val=4;


function del($var){
        global $del_val;
         global $arr1;
        if($var==$del_val){
            
            $index=array_search($var,$arr1);
            
           array_splice($arr1,$index,1);
           

         }
         


}

 



 array_filter($arr1,"del");

 echo("Output : <br>");
 for($i=0;$i<count($arr1);$i++){
     echo("$arr1[$i] ");
 
 }

  
   echo ("<br><br>");

   

  










?>