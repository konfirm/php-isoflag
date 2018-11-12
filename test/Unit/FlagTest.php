<?php

use PHPUnit\Framework\TestCase;
use Konfirm\ISOFlag\Flag;

class FlagTest extends TestCase
{
    public function testCallStatic()
    {
        $this->assertEquals(Flag::nl(), Flag::NL());
    }

    public function testToString()
    {
        $this->assertEquals((string) Flag::nl(), "🇳🇱");
        $this->assertEquals((string) Flag::NL(), "🇳🇱");
    }

    public function testInvalidISOAlpha2() {
        $this->expectException(\Exception::class);

        Flag::AB();
    }

    public function testInvalidISOAlpha3() {
        $this->expectException(\Exception::class);

        Flag::NLD();
    }

    public function testInvalidUNM49() {
        $this->expectException(\Exception::class);

        new Flag('001');
    }
}
