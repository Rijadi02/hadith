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


    public static function find_by_name($name)
    {
        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE name = '$name' LIMIT 1");
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

}
