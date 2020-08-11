<?php


class Email extends Db_object
{
    protected static $db_table = "email";
    protected static $db_table_fields = array('id', 'hadith', 'type', 'date');
    
    public $id;
    public $hadith;
    public $type;
    public $date;

    public static function find_by_date($date, $type = 0)
    {
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table ." WHERE date = '" . $date ."' AND type = ". $type ." LIMIT 1 " );
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public function get_hadith()
    {
        return Hadithet::find_by_id($this->hadith);
    }
    
}
