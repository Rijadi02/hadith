<?php


class Emails extends Db_object
{
    protected static $db_table = "emails";
    protected static $db_table_fields = array('id', 'hadith', 'date');
    
    public $id;
    public $hadith;
    public $date;

    public static function find_by_date($date)
    {
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table ." WHERE date = '" . $date ."' LIMIT 1 " );
        if(empty($the_result_array))
        {
            $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " ORDER BY RAND() LIMIT 1;");
        }
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public function get_hadith()
    {
        return Hadiths::get_by_id($this->hadith);
    }
    
}
