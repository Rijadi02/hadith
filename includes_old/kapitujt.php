<?php


class Kapitujt extends Db_object
{
    protected static $db_table = "kapitujt";
    protected static $db_table_fields = array('id', 'IDLibri', 'NrKapitulli', 'Kapitulli', "NrHadith");
    
    public $id;
    public $IDLibri;
    public $NrKapitulli;
    public $Kapitulli;
    public $NrHadith;

    
}
