<?php
require_once './StrUtils.php';
use PHPUnit\Framework\TestCase;
class StrUtilsTests extends TestCase
{
    public function testAttribute()
    {
        $this->assertClassHasAttribute('_str',StrUtils::class);
    }
    public function teststrIsNotEmpty()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertNotEmpty($testStr->str);
    }
    public function testIsBold()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertEquals($testStr->bold(),$testStr->bold());
    }
    public function testIsItalic()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertEquals($testStr->italic(),$testStr->italic());
    }
    public function testIsUnderline()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertEquals($testStr->underline(),$testStr->underline());
    }
    public function testIsCapitalize()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertEquals($testStr->capitalize(),$testStr->capitalize());
    }
}
?>