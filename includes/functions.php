<?php

function narr_format($str)
{
    $str = ltrim($str, ' '); 
    $str = ltrim($str, ',');
    $str = ltrim($str, ' '); 
    $str = ucfirst($str);
    return $str;
}

?>