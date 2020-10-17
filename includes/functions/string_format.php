<?php


function hadith_split($hadith, $class)
{
    if(substr_count($hadith,"<p>") > 1)
    {
        $hadith = str_replace_first("<p>", "<p class=\"$class\" id=\"$class\">", $hadith);
    }
    return $hadith;
}

function al_hadith_split($hadith, $class)
{
    $return_str = "<p class=\"$class\" id=\"$class\">";

    $hadith = explode('</span>',$hadith)[1];

    //$list = ["transmeton se", "tha:", "tregon se", "transmeton:", "tregon:", "rrëfen:"];
    $list = ["transmeton se", ":", "tregon se"];

    $mylist = [];

    foreach($list as $del)
    {
        $data = explode($del, $hadith);
        $mylist[$del] = strlen($data[0]);
    }

    $del = array_keys($mylist, min($mylist))[0];

    $return_str .= str_replace_first($del, $del." </p> <p>", $hadith);

    return $return_str;
}


function ar_hadith_split($hadith, $class)
{
    $return_str = "<p class=\"$class\" id=\"$class\">";

    $hadith = explode('</span>',$hadith)[1];

    //$list = ["transmeton se", "tha:", "tregon se", "transmeton:", "tregon:", "rrëfen:"];
    $list = [":"];

    $mylist = [];

    foreach($list as $del)
    {
        $data = explode($del, $hadith);
        $mylist[$del] = strlen($data[0]);
    }

    $del = array_keys($mylist, min($mylist))[0];

    $return_str .= str_replace_first($del,$del." </p> <p>", $hadith);

    return $return_str;
}
