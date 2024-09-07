<?php
    function passwordGen(int $length){
        $chars=array_merge(range(0, 9), range('A', 'z'));
        $password='';
        for($i=0; $i < $length; $i++){
            $password.=$chars[mt_rand(0, count($chars)-1)];
        }
        return $password;
    }
?>