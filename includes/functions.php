<?php

function narr_format($str)
{
    $str = ltrim($str, ' '); 
    $str = ltrim($str, ',');
    $str = ltrim($str, ' '); 
    $str = ucfirst($str);
    return $str;
}

/**
 * Converts a number to its roman presentation.
 **/ 
function numberToRoman($num)  
{ 
    // Be sure to convert the given parameter into an integer
    $n = intval($num);
    $result = ''; 
 
    // Declare a lookup array that we will use to traverse the number: 
    $lookup = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    ); 
 
    foreach ($lookup as $roman => $value)  
    {
        // Look for number of matches
        $matches = intval($n / $value); 
 
        // Concatenate characters
        $result .= str_repeat($roman, $matches); 
 
        // Substract that from the number 
        $n = $n % $value; 
    } 

    return $result; 
}


function message($my_msg, $my_msg_type = "success")
{
    global $msg , $msg_type;
    $msg = $my_msg;
    $msg_type = $my_msg_type;
}