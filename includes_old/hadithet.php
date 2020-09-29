<?php


class Hadithet extends Db_object
{
    protected static $db_table = "hadithet";
    protected static $db_table_fields = array('id', 'IDKapitulli' ,'NrHadithi', 'Transmetimi', 'Hadithi', 'IDFusnota', 'NrHadithiPerseritje', 'Zgjedhur', 'Lexuar', 'KomentTjeter', 'Kudsij', 'Shkalla');
    
    public $id;
    public $IDKapitulli;
    public $NrHadithi;
    public $Transmetimi;
    public $Hadithi;
    public $IDFusnota;
    public $NrHadithiPerseritje;
    public $Zgjedhur;
    public $Lexuar;
    public $KomentTjeter;
    public $Kudsij;
    public $Shkalla;

    public function get_chapter()
    {
        return Kapitujt::find_by_id($this->IDKapitulli);
    }

    public function get_book()
    {
        return Librat::find_by_id($this->get_chapter()->IDLibri);
    }

    public static function get_random()
    {   
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE LENGTH(Hadithi) < 1400 AND Zgjedhur = 1 ORDER BY RAND() LIMIT 1;");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function get_fix()
    {   
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE Lexuar = 0 AND LENGTH(Hadithi) < 1400 LIMIT 1;");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function get_nawawi()
    {   
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE IDKapitulli > 1999 ORDER BY RAND() LIMIT 1;");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function find_by_nr($nr)
    {   
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE NrHadithi = " . $nr);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

}