<?php

// require_once("functions.php");

class Hadith extends Db_object
{
    protected static $db_table = "hadith";
    protected static $db_table_fields = array('id', 'id_book' ,'hadith_id', 'source', 'chapter_no', 'hadith_no', 'chapter', 'chain_indx', 'text_ar', 'text_en');
    
    public $id;
    public $id_book;
    public $hadith_id;
    public $source;
    public $chapter_no;
    public $hadith_no;
    public $chapter;
    public $chain_indx;
    public $text_ar;
    public $text_en;

    public function get_en_hadith()
    {
        return str_replace($this->get_en_narration(),"",$this->text_en);
    }

    public function get_en_narration()
    {
        return explode(":",$this->text_en)[0] . ":" ;
    }

    public function get_en_book()
    {
        return $this->hadith_no . ", " . $this->chapter_no . ", " . explode(" - ", $this->chapter)[0];
    }

    public function get_ar_book()
    {
        return $this->hadith_no . ", " . $this->chapter_no . ", " . explode(" - ", $this->chapter)[1];
    }

    public static function get_random()
    {   
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE LENGTH(text_en) > 16 AND LENGTH(text_ar) > 16 ORDER BY RAND() LIMIT 1;");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    // public static function get_fix()
    // {   
    //     $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE Lexuar = 0 AND LENGTH(Hadithi) < 1400 LIMIT 1;");
    //     return !empty($the_result_array) ? array_shift($the_result_array) : false;
    // }

    // public static function get_nawawi()
    // {   
    //     $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE IDKapitulli > 1999 ORDER BY RAND() LIMIT 1;");
    //     return !empty($the_result_array) ? array_shift($the_result_array) : false;
    // }

    // public static function find_by_nr($nr)
    // {   
    //     $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE NrHadithi = " . $nr);
    //     return !empty($the_result_array) ? array_shift($the_result_array) : false;
    // }

}
