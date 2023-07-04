<?php 

    function generateRandomPassword($length){
        $allLetters = ["a","b","c","d","e","f","g","h","i","l","m","n","o","p","q","r","s","t","u","v","z"];
        $allNumbers = [1,2,3,4,5,6,7,8,9];
        $allSymbols = ["!","£","$","%","&","/","@"];

        $newPasword = "";
        $totalCaracters = array_merge($allLetters,$allNumbers,$allSymbols);

        for($i=0; $i < $length ; $i++){
            $keyElement = array_rand($totalCaracters,1);                     
            $newPasword = $newPasword . $totalCaracters[$keyElement];
        }
        return $newPasword;
    }

?>