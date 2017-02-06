<?php

namespace App;

use App\BibleName;

class BibleNameTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $bible_name = new BibleName();
        $bible_name->setName('Job');

        $this->assertEquals('Job', $bible_name->name());
    }
}
