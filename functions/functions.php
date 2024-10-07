<?php

function isPalindrome($string)  {
    if(!empty($string))  {
    if($string === strrev($string)){
        
        echo $string.' '. "is Palindrome" ;
    } else {
        
        echo $string.' '. 'Is Not Palindrome';
    }
    } else {
        echo 'Insert a Valid Word';
    }
}