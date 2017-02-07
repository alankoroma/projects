<?php

namespace App;

use App\BibleName;

class BibleNameTest extends \PHPUnit_Framework_TestCase
{
    public function testGetNames()
    {
        $bible_names = new BibleNames();
        $names = $bible_names->getNames();

        $this->assertContains('Job', $names);
        $this->assertContains('Numbers', $names);
    }

}
