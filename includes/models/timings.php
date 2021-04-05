<?php


class Timings extends Db_object
{
    protected static $db_table = "timings";
    protected static $db_table_fields = array('id', 'month', 'day', 'country', 'imsak', 'sunrise', 'dhuhr', 'asr', 'maghrib', 'isha');
    
    public $id;
    public $month;
    public $day;
    public $country;

    public $imsak;
    public $sunrise;
    public $dhuhr;
    public $asr;
    public $maghrib;
    public $isha;

    public static function get_timestamp($timestamp, $countrycode)
    {
        $date = date('d-m', $timestamp);
        $data = explode('-', $date);
        $day = $data[0];
        $month = $data[1];

        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE day = $day AND month = $month AND country = '$countrycode' LIMIT 1");
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
}
