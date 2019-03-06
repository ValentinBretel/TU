<?php class exemple{
    
    /*public function addFive($num) {
        $num += 5;
     }*/

     public function checkNumeric($num){
         if(is_numeric($num) == true){
             return true;
         }else{
             return false;
         }
     }
}