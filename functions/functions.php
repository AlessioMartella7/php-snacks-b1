<?php

function isPalindrome($string)  {
    if($string === strrev($string)){
        return true;
        echo $string. "is Palindrome" ;
    } else {
        return false;
        echo $string. 'Is Not Palindrome';
    }

}