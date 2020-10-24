<?php


class Hadiths extends Db_object
{
    protected static $db_table = "hadiths";
    protected static $db_table_fields = array('id', 'hadith_no', 'chapter_no', 'book_no', 'collection', 'text_en', 'text_ar', 'text_al', 'grade_en', 'grade_ar', 'grade_al');
    
    public $id;
    public $hadith_no;
    public $chapter_no;
    public $book_no;
    public $collection;
    public $text_en;
    public $text_ar;
    public $text_al;
    public $grade_en;
    public $grade_ar;
    public $grade_al;

    public static function get_random($lan = "en")
    {   
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE LENGTH(text_$lan) > 24 ORDER BY RAND() LIMIT 1;");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    
    public function get_book()
    {
        return Books::find_by_no($this->collection, $this->book_no);
    }

    public function get_by_id($id)
    {
        $the_result_array = self::find_by_query("SELECT * FROM " . self::$db_table . " WHERE id = $id LIMIT 1;");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public function book_str($type)
    {
        $book = "";   
        switch($type)
        {
            case "en":
                $book = $this->get_book()->book_en;
            case "ar":
                $book = $this->get_book()->book_ar;
            case "al":
                $book = $this->get_book()->book_al;
        }
        return $this->hadith_no .", ". numberToRoman($this->chapter_no) .", ". $book;
    }
}
