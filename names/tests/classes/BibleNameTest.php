<?php

namespace App;

use App\BibleName;

class BibleNameTest extends \PHPUnit_Framework_TestCase
{
    public function testGetNames()
    {
        $bible_names = new BibleNames();
        $names = $bible_names->getNames();

        $this->assertContains('job', $names);
        $this->assertContains('numbers', $names);
    }

    public function testFindNames()
    {

        $string = "LET'S SEE HOW CLEVER YOU ARE IF YOU CAN FIND BOOKS OF THE
                BIBLE. There are names of sixteen (16) books of the bible
                hidden in the paragraph below. Let me know how many you can
                find!!! A preacher found 15 books in twenty minutes; it took
                him 3 weeks just to find the 16th one, HAVE FUN! I once made
                a remark about the hidden books of the Bible. A certain luke,
                kept people looking so hard for facts, and for others, it was
                a revelation. Some were in a jam, especially since the names
                of the books were not capitalized. But the truth finally
                struck home to numbers of our readers. To others it was a
                job. We want it to be a most fascinating little moment for
                you. Yes, there will be some really easy ones to spot.
                Others may require judges to help find them. I will be
                quickly admit it usually takes a minister to find one of
                them, and there will be loud lamentations when it is found.
                A little lady says she brews a cup of tea so she can
                concentrate better. See how well compete. Relax now, for
                there really are sixteen books of the Bible in this
                paragraph.  Enjoy the fun now and send back the SIXTEEN BOOKS.";

        $bible_names = new BibleNames();
        $names = $bible_names->findNames($string);

        $this->assertContains('kings', $names);
        $this->assertContains('peter', $names);
    }
}
