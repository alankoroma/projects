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
}
