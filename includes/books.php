<?php


class Books extends Db_object
{
    protected static $db_table = "books";
    protected static $db_table_fields = array('id', 'book_no', 'collection', 'book_en', 'book_ar', 'book_al');
    
    public $id;
    public $book_no;
    public $collection;
    public $book_en;
    public $book_ar;
    public $book_al;

    public static function find_by_no($collection, $book_no)
    {
        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE collection = '$collection' and book_no = '$book_no' LIMIT 1");
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

}
