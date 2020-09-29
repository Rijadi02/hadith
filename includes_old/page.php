<?php

session_start();

if(!isset($_SESSION['i']))
{
    $_SESSION['i'] = -1;
}

if(!isset($_SESSION['page']))
{
    $_SESSION['page'] = [];
}


function page_back()
{
    $i = $_SESSION['i'];
    $page = $_SESSION['page'];

    if($i > 0)
    {
        $i--;
    }

    $_SESSION['i'] = $i;

    return $page[$i];
}

function page_next()
{
    $i = $_SESSION['i'];
    $page = $_SESSION['page'];

    if($i < count($page) - 1)
    {
        $i++;
    }

    $_SESSION['i'] = $i;

    return $page[$i];
}


function page_start($random)
{
    $i = $_SESSION['i'];
    $page = $_SESSION['page'];

    if($i == count($page))
    {
        array_push($page, $random);
        $i++;
    }
    else
    {
        $page = array_slice($page, 0, $i + 1);
        array_push($page, $random);
        $i++;
    }

    $_SESSION['i'] = $i;
    $_SESSION['page'] = $page;

    return $page[$i];
}

