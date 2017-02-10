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
            $book = strtolower($book);
            // Remove Numbers in Front Of Bible Names (1 kings)
            $book = preg_replace("/[^a-z]+/i", "", $book);
            $bible_books[] = $book;
        }

        $bible_books = array_unique($bible_books);

        return $bible_books;
    }

    public function findNames($input)
    {
        $string = preg_replace("/[^a-zA-Z]+/i", "", $input);
        $string = strtolower($string);

        $names = $this->getNames();

        $bible_names_array = array();
        foreach ($names as $name) {

            if (strpos($string, $name) !== false) {
                $bible_names_array[] = $name;
            }

            if (strpos(strtoupper($string), strtoupper($name)) !== false) {
                $bible_names_array[] = $name;
            }

            if (strpos(strrev($string), strrev($name)) !== false) {
                $bible_names_array[] = $name;
            }

        }

        $bible_names_array = array_unique($bible_names_array);

        return $bible_names_array;
    }
}
