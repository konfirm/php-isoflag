<?php

use PHPUnit\Framework\TestCase;
use Konfirm\ISOFlag\Flag;

class ReadmeSamplesTest extends TestCase
{
    public function testFlagFactory() {
        $flag = Flag::ES();

        $this->assertEquals($flag, Flag::es());
        $this->assertTrue($flag == new Flag('ES'));
        $this->assertFalse($flag === new Flag('ES'));
    }

    public function testHasFlagUS() {
        $this->assertTrue(Flag::hasFlag('US'));
    }

    public function testNotHasFlagQQ() {
        $this->assertFalse(Flag::hasFlag('QQ'));
    }

    public function testToHTMLEntitiesCH() {
        $flag = new Flag('CH');

        $this->assertEquals('&#x1F1E8;&#x1F1ED;', $flag->toHTMLEntities());
    }

    public function testToUnicodeSymbolDK() {
        $flag = new Flag('DK');

        $this->assertEquals('🇩🇰', $flag->toUnicodeSymbol());
    }

    public function testToStringSE() {
        $flag = new Flag('SE');

        $this->assertEquals('🇸🇪', (string) $flag);
    }
}
