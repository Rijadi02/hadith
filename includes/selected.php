<?php


class Selected extends Db_object
{
    protected static $db_table = "selected";
    protected static $db_table_fields = array('id', 'collection', 'hadith_no', 'selected');
    
    public $id;
    public $collection;
    public $hadith_no;
    public $selected;

    public static function find_last($collection)
    {
        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE collection = '$collection' ORDER BY hadith_no DESC LIMIT 1");
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
}
