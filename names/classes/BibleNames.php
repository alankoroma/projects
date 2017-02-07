<?php

namespace App;

use Snap\BibleBooks\BibleBooks;

class BibleNames
{
    public function getNames()
    {
        $bibleBooks = new BibleBooks();

        $books = $bibleBooks->getArrayOfBooks();

        $bible_books = array();
        foreach ($books as $book) {
            $bible_books[] = $book;
        }

        return $bible_books;
    }

    public function findNames($input)
    {
        $input = strtolower($input);
        $string = preg_replace("/[^a-zA-Z]+/", "", $input);

        $names = $this->getNames();

        $bible_names_array = array();
        foreach ($names as $key => $name) {
            $book_name = strtolower($name);
            $count = substr_count($string, $book_name);
            $bible_names_array[$book_name] = $count;
        }

        $names_array = array();
        foreach ($bible_names_array as $key => $name) {
            if($name >= 1) {
                $names_array[] = $key;
            }
        }

        return $names_array;
    }
}
