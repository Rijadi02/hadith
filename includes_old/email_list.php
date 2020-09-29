<?php


class EmailList extends Db_object
{
    protected static $db_table = "email_list";
    protected static $db_table_fields = array('id', 'email', 'type');
    
    public $id;
    public $email;
    public $type;

    public static function email_exists($email)
    {
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table ." WHERE email = '" . $email ."'" );
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function find_by_type($type)
    {
        return self::find_by_query("SELECT * FROM " . self::$db_table ." WHERE type = '" . $type ."'" );
    }
    
}
