<?php

// require_once("functions.php");

class Hadith
{
    public $ar;
    public $en;

    function __construct()
    {
        $request = random_request();
        $data = json_decode($request);
        //echo $request;
        foreach ($data AS $key => $value) $this->{$key} = $value;
        $this->en = $this->hadith[0];
        $this->ar = $this->hadith[1];
        return $this;
    }
}
