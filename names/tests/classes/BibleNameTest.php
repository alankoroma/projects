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

    public function testFindNames()
    {
        $string = "it was a revelation. Some were in a jam, especially since
                    the names of the books were not capitalized. But the truth finally
                    struck home to numbers of our readers. To others it was a job.
                    We want it to be a most fascinating little moment for you.
                    Yes, there will be some really easy ones to spot.
                    Others may require judges to help find them. I will be quickly
                    admit it usually takes a minister to find one of them, and there
                    will be loud lamentations when it is found. A little lady says she
                    brews a cup of tea so she can concentrate better. See how well
                    compete. Relax now, for there really are sixteen books of the Bible in this
                    paragraph.  Enjoy the fun now and send back the SIXTEEN BOOKS.";

        $bible_names = new BibleNames();
        $names = $bible_names->findNames($string);

        $this->assertContains('judges', $names);
        $this->assertContains('lamentations', $names);
    }
}
