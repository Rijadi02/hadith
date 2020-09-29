<?php 
include("../includes/init.php");
    
    foreach(Books::find_by_query("SELECT id FROM books WHERE book_no = 0") as $i){ 
        $collection = 'bukhari';
        $json_book = json_decode(sunnah_book_request($collection, $i->id));
        $book = Books::find_by_id($i->id);

        $book->book_no = $json_book->bookNumber;
        $book->collection = $collection;
        $book->book_en = $json_book->book[0]->name;
        $book->book_ar = $json_book->book[1]->name;



        print_r($book);
        echo('<br>');
        $book->save($i->id);
        
    }
?>