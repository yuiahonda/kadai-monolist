<?php
     $array = [0, 10, 11, 9990, 32, 1, 2, 1313, 90, 3]; 
     
     $max = $array[0];
     for ($i =1; $i<count($array);$i++){
      
     if($max < $array[$i]){
        $max = $array[$i];
     }
     }
     print $max . 'は最大値';  PHP_EOL;


   
?>
