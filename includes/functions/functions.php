<?php

function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        return substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

function numberToRoman($num)
{
   
    $n = intval($num);
    $result = '';


    $lookup = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    );

    foreach ($lookup as $roman => $value) {

        $matches = intval($n / $value);
        $result .= str_repeat($roman, $matches);
        $n = $n % $value;
    }

    return $result;
}


function message($my_msg, $my_msg_type = "success")
{
    global $msg, $msg_type;
    $msg = $my_msg;
    $msg_type = $my_msg_type;
}

function redirect($page)
{
    header('location:' . $page . '');
    exit;
}

function array_random_assoc($arr, $num = 1)
{
    $keys = array_keys($arr);
    shuffle($keys);

    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[$keys[$i]] = $arr[$keys[$i]];
    }
    return $r;
}



