<?php

class validate
{
    public function name($str) {
        $str = trim($str);
        return $str;
    }
    
    public function phone($str) {
        $str = filter_var($str, FILTER_SANITIZE_NUMBER_INT);
        return $str;
    }
    
    public function email($str) {
        $str = filter_var($str, FILTER_VALIDATE_EMAIL);
        return $str;
    }
    
    
    public function password($pass1, $pass2) {
        if ($pass1 == $pass2) {
            return true;
        }
    }
}
    