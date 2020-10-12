<?php


class Collections extends Db_object
{
    protected static $db_table = "collections";
    protected static $db_table_fields = array('id', 'name', 'collection_en', 'collection_ar', 'collection_al');
    
    public $id;
    public $name;
    public $collection_en;
    public $collection_ar;
    public $collection_al;

}
