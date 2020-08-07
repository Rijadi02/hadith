<?php


class Librat extends Db_object
{
    protected static $db_table = "librat";
    protected static $db_table_fields = array('id', 'NrLibri', 'Libri', 'LibriShkurt');
    
    public $id;
    public $NrLibri;
    public $Libri;
    public $LibriShkurt;
}
