<?php

use PHPUnit\Framework\TestCase;

require_once '../ArabicToRoman.php';

class ArabicToRomanTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('I', ArabicToRoman::convert(1));
        $this->assertEquals('II', ArabicToRoman::convert(2));
        $this->assertEquals('III', ArabicToRoman::convert(3));

        $this->assertEquals('IV', ArabicToRoman::convert(4));
        $this->assertEquals('V', ArabicToRoman::convert(5));
        $this->assertEquals('VI', ArabicToRoman::convert(6));
        $this->assertEquals('VII', ArabicToRoman::convert(7));

        $this->assertEquals('VIII', ArabicToRoman::convert(8));
        $this->assertEquals('IX', ArabicToRoman::convert(9));
        $this->assertEquals('X', ArabicToRoman::convert(10));
        $this->assertEquals('XI', ArabicToRoman::convert(11));

        $this->assertEquals('XIV', ArabicToRoman::convert(14));
        $this->assertEquals('XV', ArabicToRoman::convert(15));
        $this->assertEquals('XVI', ArabicToRoman::convert(16));

        $this->assertEquals('XIX', ArabicToRoman::convert(19));
        $this->assertEquals('XX', ArabicToRoman::convert(20));
        $this->assertEquals('XXI', ArabicToRoman::convert(21));


        $this->assertEquals('XL', ArabicToRoman::convert(40));
        $this->assertEquals('XLI', ArabicToRoman::convert(41));
        $this->assertEquals('XLIV', ArabicToRoman::convert(44));
        $this->assertEquals('XLIX', ArabicToRoman::convert(49));
        $this->assertEquals('L', ArabicToRoman::convert(50));


        $this->assertEquals('LXXXIX', ArabicToRoman::convert(89));
        $this->assertEquals('XC', ArabicToRoman::convert(90));
        $this->assertEquals('C', ArabicToRoman::convert(100));

        $this->assertEquals('CD', ArabicToRoman::convert(400));
        $this->assertEquals('D', ArabicToRoman::convert(500));
        $this->assertEquals('DC', ArabicToRoman::convert(600));
        $this->assertEquals('DLXVII', ArabicToRoman::convert(567));

        $this->assertEquals('M', ArabicToRoman::convert(1000));
        $this->assertEquals('MM', ArabicToRoman::convert(2000));
        $this->assertEquals('MMM', ArabicToRoman::convert(3000));

        $this->assertEquals('MMMCMLXXXVII', ArabicToRoman::convert(3987));
        $this->assertEquals('MMMDCCXXVIII', ArabicToRoman::convert(3728));
        $this->assertEquals('MDCLXXVIII', ArabicToRoman::convert(1678));

        $this->assertEquals('MMMMMDLV', ArabicToRoman::convert(5555));
    }
}
