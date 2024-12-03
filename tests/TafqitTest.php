<?php

use PHPUnit\Framework\TestCase;

class TafqitTest extends TestCase
{
    public function testNumberToText()
    {
        $tafqit = new Tafqit();

        // Arabic numbers
        $this->assertEquals('ثلاثة', $tafqit->numberToText('٣', 'ar'));

        // English numbers
        $this->assertEquals('three', $tafqit->numberToText(3, 'en'));
    }
}
