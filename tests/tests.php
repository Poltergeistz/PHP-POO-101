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
        $this->assertEquals('<Strong>php is awesome !</Strong>',$testStr->bold());
    }
    public function testIsItalic()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertEquals('<i>php is awesome !</i>',$testStr->italic());
    }
    public function testIsUnderline()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertEquals('<u>php is awesome !</u>',$testStr->underline());
    }
    public function testIsCapitalize()
    {
        $testStr = new StrUtils('php is awesome !');
        $this->assertEquals(strtoupper('php is awesome !'),$testStr->capitalize());
    }
}
?>