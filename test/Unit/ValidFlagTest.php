<?php

use PHPUnit\Framework\TestCase;
use Konfirm\ISOFlag\Flag;

class ValidFlagTest extends TestCase
{
    public function testAC() {
        $flag = Flag::AC();

        $this->assertEquals($flag, Flag::ac());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇨');
        $this->assertEquals((string) $flag, '🇦🇨');
    }

    public function testAD() {
        $flag = Flag::AD();

        $this->assertEquals($flag, Flag::ad());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇩');
        $this->assertEquals((string) $flag, '🇦🇩');
    }

    public function testAE() {
        $flag = Flag::AE();

        $this->assertEquals($flag, Flag::ae());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇪');
        $this->assertEquals((string) $flag, '🇦🇪');
    }

    public function testAF() {
        $flag = Flag::AF();

        $this->assertEquals($flag, Flag::af());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇫');
        $this->assertEquals((string) $flag, '🇦🇫');
    }

    public function testAG() {
        $flag = Flag::AG();

        $this->assertEquals($flag, Flag::ag());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇬');
        $this->assertEquals((string) $flag, '🇦🇬');
    }

    public function testAI() {
        $flag = Flag::AI();

        $this->assertEquals($flag, Flag::ai());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇮');
        $this->assertEquals((string) $flag, '🇦🇮');
    }

    public function testAL() {
        $flag = Flag::AL();

        $this->assertEquals($flag, Flag::al());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇱');
        $this->assertEquals((string) $flag, '🇦🇱');
    }

    public function testAM() {
        $flag = Flag::AM();

        $this->assertEquals($flag, Flag::am());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇲');
        $this->assertEquals((string) $flag, '🇦🇲');
    }

    public function testAO() {
        $flag = Flag::AO();

        $this->assertEquals($flag, Flag::ao());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇴');
        $this->assertEquals((string) $flag, '🇦🇴');
    }

    public function testAQ() {
        $flag = Flag::AQ();

        $this->assertEquals($flag, Flag::aq());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1F6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇶');
        $this->assertEquals((string) $flag, '🇦🇶');
    }

    public function testAR() {
        $flag = Flag::AR();

        $this->assertEquals($flag, Flag::ar());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇷');
        $this->assertEquals((string) $flag, '🇦🇷');
    }

    public function testAS() {
        $flag = Flag::AS();

        $this->assertEquals($flag, Flag::as());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇸');
        $this->assertEquals((string) $flag, '🇦🇸');
    }

    public function testAT() {
        $flag = Flag::AT();

        $this->assertEquals($flag, Flag::at());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇹');
        $this->assertEquals((string) $flag, '🇦🇹');
    }

    public function testAU() {
        $flag = Flag::AU();

        $this->assertEquals($flag, Flag::au());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇺');
        $this->assertEquals((string) $flag, '🇦🇺');
    }

    public function testAW() {
        $flag = Flag::AW();

        $this->assertEquals($flag, Flag::aw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇼');
        $this->assertEquals((string) $flag, '🇦🇼');
    }

    public function testAX() {
        $flag = Flag::AX();

        $this->assertEquals($flag, Flag::ax());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1FD;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇽');
        $this->assertEquals((string) $flag, '🇦🇽');
    }

    public function testAZ() {
        $flag = Flag::AZ();

        $this->assertEquals($flag, Flag::az());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E6;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇦🇿');
        $this->assertEquals((string) $flag, '🇦🇿');
    }

    public function testBA() {
        $flag = Flag::BA();

        $this->assertEquals($flag, Flag::ba());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇦');
        $this->assertEquals((string) $flag, '🇧🇦');
    }

    public function testBB() {
        $flag = Flag::BB();

        $this->assertEquals($flag, Flag::bb());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1E7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇧');
        $this->assertEquals((string) $flag, '🇧🇧');
    }

    public function testBD() {
        $flag = Flag::BD();

        $this->assertEquals($flag, Flag::bd());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇩');
        $this->assertEquals((string) $flag, '🇧🇩');
    }

    public function testBE() {
        $flag = Flag::BE();

        $this->assertEquals($flag, Flag::be());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇪');
        $this->assertEquals((string) $flag, '🇧🇪');
    }

    public function testBF() {
        $flag = Flag::BF();

        $this->assertEquals($flag, Flag::bf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇫');
        $this->assertEquals((string) $flag, '🇧🇫');
    }

    public function testBG() {
        $flag = Flag::BG();

        $this->assertEquals($flag, Flag::bg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇬');
        $this->assertEquals((string) $flag, '🇧🇬');
    }

    public function testBH() {
        $flag = Flag::BH();

        $this->assertEquals($flag, Flag::bh());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇭');
        $this->assertEquals((string) $flag, '🇧🇭');
    }

    public function testBI() {
        $flag = Flag::BI();

        $this->assertEquals($flag, Flag::bi());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇮');
        $this->assertEquals((string) $flag, '🇧🇮');
    }

    public function testBJ() {
        $flag = Flag::BJ();

        $this->assertEquals($flag, Flag::bj());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1EF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇯');
        $this->assertEquals((string) $flag, '🇧🇯');
    }

    public function testBL() {
        $flag = Flag::BL();

        $this->assertEquals($flag, Flag::bl());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇱');
        $this->assertEquals((string) $flag, '🇧🇱');
    }

    public function testBM() {
        $flag = Flag::BM();

        $this->assertEquals($flag, Flag::bm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇲');
        $this->assertEquals((string) $flag, '🇧🇲');
    }

    public function testBN() {
        $flag = Flag::BN();

        $this->assertEquals($flag, Flag::bn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇳');
        $this->assertEquals((string) $flag, '🇧🇳');
    }

    public function testBO() {
        $flag = Flag::BO();

        $this->assertEquals($flag, Flag::bo());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇴');
        $this->assertEquals((string) $flag, '🇧🇴');
    }

    public function testBQ() {
        $flag = Flag::BQ();

        $this->assertEquals($flag, Flag::bq());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇶');
        $this->assertEquals((string) $flag, '🇧🇶');
    }

    public function testBR() {
        $flag = Flag::BR();

        $this->assertEquals($flag, Flag::br());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇷');
        $this->assertEquals((string) $flag, '🇧🇷');
    }

    public function testBS() {
        $flag = Flag::BS();

        $this->assertEquals($flag, Flag::bs());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇸');
        $this->assertEquals((string) $flag, '🇧🇸');
    }

    public function testBT() {
        $flag = Flag::BT();

        $this->assertEquals($flag, Flag::bt());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇹');
        $this->assertEquals((string) $flag, '🇧🇹');
    }

    public function testBV() {
        $flag = Flag::BV();

        $this->assertEquals($flag, Flag::bv());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1FB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇻');
        $this->assertEquals((string) $flag, '🇧🇻');
    }

    public function testBW() {
        $flag = Flag::BW();

        $this->assertEquals($flag, Flag::bw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇼');
        $this->assertEquals((string) $flag, '🇧🇼');
    }

    public function testBY() {
        $flag = Flag::BY();

        $this->assertEquals($flag, Flag::by());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇾');
        $this->assertEquals((string) $flag, '🇧🇾');
    }

    public function testBZ() {
        $flag = Flag::BZ();

        $this->assertEquals($flag, Flag::bz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E7;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇧🇿');
        $this->assertEquals((string) $flag, '🇧🇿');
    }

    public function testCA() {
        $flag = Flag::CA();

        $this->assertEquals($flag, Flag::ca());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇦');
        $this->assertEquals((string) $flag, '🇨🇦');
    }

    public function testCC() {
        $flag = Flag::CC();

        $this->assertEquals($flag, Flag::cc());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇨');
        $this->assertEquals((string) $flag, '🇨🇨');
    }

    public function testCD() {
        $flag = Flag::CD();

        $this->assertEquals($flag, Flag::cd());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇩');
        $this->assertEquals((string) $flag, '🇨🇩');
    }

    public function testCF() {
        $flag = Flag::CF();

        $this->assertEquals($flag, Flag::cf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇫');
        $this->assertEquals((string) $flag, '🇨🇫');
    }

    public function testCG() {
        $flag = Flag::CG();

        $this->assertEquals($flag, Flag::cg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇬');
        $this->assertEquals((string) $flag, '🇨🇬');
    }

    public function testCH() {
        $flag = Flag::CH();

        $this->assertEquals($flag, Flag::ch());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇭');
        $this->assertEquals((string) $flag, '🇨🇭');
    }

    public function testCI() {
        $flag = Flag::CI();

        $this->assertEquals($flag, Flag::ci());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇮');
        $this->assertEquals((string) $flag, '🇨🇮');
    }

    public function testCK() {
        $flag = Flag::CK();

        $this->assertEquals($flag, Flag::ck());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇰');
        $this->assertEquals((string) $flag, '🇨🇰');
    }

    public function testCL() {
        $flag = Flag::CL();

        $this->assertEquals($flag, Flag::cl());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇱');
        $this->assertEquals((string) $flag, '🇨🇱');
    }

    public function testCM() {
        $flag = Flag::CM();

        $this->assertEquals($flag, Flag::cm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇲');
        $this->assertEquals((string) $flag, '🇨🇲');
    }

    public function testCN() {
        $flag = Flag::CN();

        $this->assertEquals($flag, Flag::cn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇳');
        $this->assertEquals((string) $flag, '🇨🇳');
    }

    public function testCO() {
        $flag = Flag::CO();

        $this->assertEquals($flag, Flag::co());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇴');
        $this->assertEquals((string) $flag, '🇨🇴');
    }

    public function testCP() {
        $flag = Flag::CP();

        $this->assertEquals($flag, Flag::cp());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1F5;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇵');
        $this->assertEquals((string) $flag, '🇨🇵');
    }

    public function testCR() {
        $flag = Flag::CR();

        $this->assertEquals($flag, Flag::cr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇷');
        $this->assertEquals((string) $flag, '🇨🇷');
    }

    public function testCU() {
        $flag = Flag::CU();

        $this->assertEquals($flag, Flag::cu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇺');
        $this->assertEquals((string) $flag, '🇨🇺');
    }

    public function testCV() {
        $flag = Flag::CV();

        $this->assertEquals($flag, Flag::cv());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1FB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇻');
        $this->assertEquals((string) $flag, '🇨🇻');
    }

    public function testCW() {
        $flag = Flag::CW();

        $this->assertEquals($flag, Flag::cw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇼');
        $this->assertEquals((string) $flag, '🇨🇼');
    }

    public function testCX() {
        $flag = Flag::CX();

        $this->assertEquals($flag, Flag::cx());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1FD;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇽');
        $this->assertEquals((string) $flag, '🇨🇽');
    }

    public function testCY() {
        $flag = Flag::CY();

        $this->assertEquals($flag, Flag::cy());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇾');
        $this->assertEquals((string) $flag, '🇨🇾');
    }

    public function testCZ() {
        $flag = Flag::CZ();

        $this->assertEquals($flag, Flag::cz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E8;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇨🇿');
        $this->assertEquals((string) $flag, '🇨🇿');
    }

    public function testDE() {
        $flag = Flag::DE();

        $this->assertEquals($flag, Flag::de());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E9;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇩🇪');
        $this->assertEquals((string) $flag, '🇩🇪');
    }

    public function testDG() {
        $flag = Flag::DG();

        $this->assertEquals($flag, Flag::dg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E9;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇩🇬');
        $this->assertEquals((string) $flag, '🇩🇬');
    }

    public function testDJ() {
        $flag = Flag::DJ();

        $this->assertEquals($flag, Flag::dj());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E9;&#x1F1EF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇩🇯');
        $this->assertEquals((string) $flag, '🇩🇯');
    }

    public function testDK() {
        $flag = Flag::DK();

        $this->assertEquals($flag, Flag::dk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E9;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇩🇰');
        $this->assertEquals((string) $flag, '🇩🇰');
    }

    public function testDM() {
        $flag = Flag::DM();

        $this->assertEquals($flag, Flag::dm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E9;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇩🇲');
        $this->assertEquals((string) $flag, '🇩🇲');
    }

    public function testDO() {
        $flag = Flag::DO();

        $this->assertEquals($flag, Flag::do());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E9;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇩🇴');
        $this->assertEquals((string) $flag, '🇩🇴');
    }

    public function testDZ() {
        $flag = Flag::DZ();

        $this->assertEquals($flag, Flag::dz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1E9;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇩🇿');
        $this->assertEquals((string) $flag, '🇩🇿');
    }

    public function testEA() {
        $flag = Flag::EA();

        $this->assertEquals($flag, Flag::ea());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇦');
        $this->assertEquals((string) $flag, '🇪🇦');
    }

    public function testEC() {
        $flag = Flag::EC();

        $this->assertEquals($flag, Flag::ec());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇨');
        $this->assertEquals((string) $flag, '🇪🇨');
    }

    public function testEE() {
        $flag = Flag::EE();

        $this->assertEquals($flag, Flag::ee());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇪');
        $this->assertEquals((string) $flag, '🇪🇪');
    }

    public function testEG() {
        $flag = Flag::EG();

        $this->assertEquals($flag, Flag::eg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇬');
        $this->assertEquals((string) $flag, '🇪🇬');
    }

    public function testEH() {
        $flag = Flag::EH();

        $this->assertEquals($flag, Flag::eh());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇭');
        $this->assertEquals((string) $flag, '🇪🇭');
    }

    public function testER() {
        $flag = Flag::ER();

        $this->assertEquals($flag, Flag::er());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇷');
        $this->assertEquals((string) $flag, '🇪🇷');
    }

    public function testES() {
        $flag = Flag::ES();

        $this->assertEquals($flag, Flag::es());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇸');
        $this->assertEquals((string) $flag, '🇪🇸');
    }

    public function testET() {
        $flag = Flag::ET();

        $this->assertEquals($flag, Flag::et());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇹');
        $this->assertEquals((string) $flag, '🇪🇹');
    }

    public function testEU() {
        $flag = Flag::EU();

        $this->assertEquals($flag, Flag::eu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EA;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇪🇺');
        $this->assertEquals((string) $flag, '🇪🇺');
    }

    public function testFI() {
        $flag = Flag::FI();

        $this->assertEquals($flag, Flag::fi());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EB;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇫🇮');
        $this->assertEquals((string) $flag, '🇫🇮');
    }

    public function testFJ() {
        $flag = Flag::FJ();

        $this->assertEquals($flag, Flag::fj());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EB;&#x1F1EF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇫🇯');
        $this->assertEquals((string) $flag, '🇫🇯');
    }

    public function testFK() {
        $flag = Flag::FK();

        $this->assertEquals($flag, Flag::fk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EB;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇫🇰');
        $this->assertEquals((string) $flag, '🇫🇰');
    }

    public function testFM() {
        $flag = Flag::FM();

        $this->assertEquals($flag, Flag::fm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EB;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇫🇲');
        $this->assertEquals((string) $flag, '🇫🇲');
    }

    public function testFO() {
        $flag = Flag::FO();

        $this->assertEquals($flag, Flag::fo());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EB;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇫🇴');
        $this->assertEquals((string) $flag, '🇫🇴');
    }

    public function testFR() {
        $flag = Flag::FR();

        $this->assertEquals($flag, Flag::fr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EB;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇫🇷');
        $this->assertEquals((string) $flag, '🇫🇷');
    }

    public function testGA() {
        $flag = Flag::GA();

        $this->assertEquals($flag, Flag::ga());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇦');
        $this->assertEquals((string) $flag, '🇬🇦');
    }

    public function testGB() {
        $flag = Flag::GB();

        $this->assertEquals($flag, Flag::gb());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1E7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇧');
        $this->assertEquals((string) $flag, '🇬🇧');
    }

    public function testGD() {
        $flag = Flag::GD();

        $this->assertEquals($flag, Flag::gd());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇩');
        $this->assertEquals((string) $flag, '🇬🇩');
    }

    public function testGE() {
        $flag = Flag::GE();

        $this->assertEquals($flag, Flag::ge());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇪');
        $this->assertEquals((string) $flag, '🇬🇪');
    }

    public function testGF() {
        $flag = Flag::GF();

        $this->assertEquals($flag, Flag::gf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇫');
        $this->assertEquals((string) $flag, '🇬🇫');
    }

    public function testGG() {
        $flag = Flag::GG();

        $this->assertEquals($flag, Flag::gg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇬');
        $this->assertEquals((string) $flag, '🇬🇬');
    }

    public function testGH() {
        $flag = Flag::GH();

        $this->assertEquals($flag, Flag::gh());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇭');
        $this->assertEquals((string) $flag, '🇬🇭');
    }

    public function testGI() {
        $flag = Flag::GI();

        $this->assertEquals($flag, Flag::gi());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇮');
        $this->assertEquals((string) $flag, '🇬🇮');
    }

    public function testGL() {
        $flag = Flag::GL();

        $this->assertEquals($flag, Flag::gl());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇱');
        $this->assertEquals((string) $flag, '🇬🇱');
    }

    public function testGM() {
        $flag = Flag::GM();

        $this->assertEquals($flag, Flag::gm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇲');
        $this->assertEquals((string) $flag, '🇬🇲');
    }

    public function testGN() {
        $flag = Flag::GN();

        $this->assertEquals($flag, Flag::gn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇳');
        $this->assertEquals((string) $flag, '🇬🇳');
    }

    public function testGP() {
        $flag = Flag::GP();

        $this->assertEquals($flag, Flag::gp());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F5;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇵');
        $this->assertEquals((string) $flag, '🇬🇵');
    }

    public function testGQ() {
        $flag = Flag::GQ();

        $this->assertEquals($flag, Flag::gq());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇶');
        $this->assertEquals((string) $flag, '🇬🇶');
    }

    public function testGR() {
        $flag = Flag::GR();

        $this->assertEquals($flag, Flag::gr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇷');
        $this->assertEquals((string) $flag, '🇬🇷');
    }

    public function testGS() {
        $flag = Flag::GS();

        $this->assertEquals($flag, Flag::gs());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇸');
        $this->assertEquals((string) $flag, '🇬🇸');
    }

    public function testGT() {
        $flag = Flag::GT();

        $this->assertEquals($flag, Flag::gt());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇹');
        $this->assertEquals((string) $flag, '🇬🇹');
    }

    public function testGU() {
        $flag = Flag::GU();

        $this->assertEquals($flag, Flag::gu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇺');
        $this->assertEquals((string) $flag, '🇬🇺');
    }

    public function testGW() {
        $flag = Flag::GW();

        $this->assertEquals($flag, Flag::gw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇼');
        $this->assertEquals((string) $flag, '🇬🇼');
    }

    public function testGY() {
        $flag = Flag::GY();

        $this->assertEquals($flag, Flag::gy());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EC;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇬🇾');
        $this->assertEquals((string) $flag, '🇬🇾');
    }

    public function testHK() {
        $flag = Flag::HK();

        $this->assertEquals($flag, Flag::hk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1ED;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇭🇰');
        $this->assertEquals((string) $flag, '🇭🇰');
    }

    public function testHM() {
        $flag = Flag::HM();

        $this->assertEquals($flag, Flag::hm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1ED;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇭🇲');
        $this->assertEquals((string) $flag, '🇭🇲');
    }

    public function testHN() {
        $flag = Flag::HN();

        $this->assertEquals($flag, Flag::hn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1ED;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇭🇳');
        $this->assertEquals((string) $flag, '🇭🇳');
    }

    public function testHR() {
        $flag = Flag::HR();

        $this->assertEquals($flag, Flag::hr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1ED;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇭🇷');
        $this->assertEquals((string) $flag, '🇭🇷');
    }

    public function testHT() {
        $flag = Flag::HT();

        $this->assertEquals($flag, Flag::ht());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1ED;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇭🇹');
        $this->assertEquals((string) $flag, '🇭🇹');
    }

    public function testHU() {
        $flag = Flag::HU();

        $this->assertEquals($flag, Flag::hu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1ED;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇭🇺');
        $this->assertEquals((string) $flag, '🇭🇺');
    }

    public function testIC() {
        $flag = Flag::IC();

        $this->assertEquals($flag, Flag::ic());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇨');
        $this->assertEquals((string) $flag, '🇮🇨');
    }

    public function testID() {
        $flag = Flag::ID();

        $this->assertEquals($flag, Flag::id());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇩');
        $this->assertEquals((string) $flag, '🇮🇩');
    }

    public function testIE() {
        $flag = Flag::IE();

        $this->assertEquals($flag, Flag::ie());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇪');
        $this->assertEquals((string) $flag, '🇮🇪');
    }

    public function testIL() {
        $flag = Flag::IL();

        $this->assertEquals($flag, Flag::il());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇱');
        $this->assertEquals((string) $flag, '🇮🇱');
    }

    public function testIM() {
        $flag = Flag::IM();

        $this->assertEquals($flag, Flag::im());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇲');
        $this->assertEquals((string) $flag, '🇮🇲');
    }

    public function testIN() {
        $flag = Flag::IN();

        $this->assertEquals($flag, Flag::in());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇳');
        $this->assertEquals((string) $flag, '🇮🇳');
    }

    public function testIO() {
        $flag = Flag::IO();

        $this->assertEquals($flag, Flag::io());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇴');
        $this->assertEquals((string) $flag, '🇮🇴');
    }

    public function testIQ() {
        $flag = Flag::IQ();

        $this->assertEquals($flag, Flag::iq());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇶');
        $this->assertEquals((string) $flag, '🇮🇶');
    }

    public function testIR() {
        $flag = Flag::IR();

        $this->assertEquals($flag, Flag::ir());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇷');
        $this->assertEquals((string) $flag, '🇮🇷');
    }

    public function testIS() {
        $flag = Flag::IS();

        $this->assertEquals($flag, Flag::is());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇸');
        $this->assertEquals((string) $flag, '🇮🇸');
    }

    public function testIT() {
        $flag = Flag::IT();

        $this->assertEquals($flag, Flag::it());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EE;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇮🇹');
        $this->assertEquals((string) $flag, '🇮🇹');
    }

    public function testJE() {
        $flag = Flag::JE();

        $this->assertEquals($flag, Flag::je());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EF;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇯🇪');
        $this->assertEquals((string) $flag, '🇯🇪');
    }

    public function testJM() {
        $flag = Flag::JM();

        $this->assertEquals($flag, Flag::jm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EF;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇯🇲');
        $this->assertEquals((string) $flag, '🇯🇲');
    }

    public function testJO() {
        $flag = Flag::JO();

        $this->assertEquals($flag, Flag::jo());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EF;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇯🇴');
        $this->assertEquals((string) $flag, '🇯🇴');
    }

    public function testJP() {
        $flag = Flag::JP();

        $this->assertEquals($flag, Flag::jp());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1EF;&#x1F1F5;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇯🇵');
        $this->assertEquals((string) $flag, '🇯🇵');
    }

    public function testKE() {
        $flag = Flag::KE();

        $this->assertEquals($flag, Flag::ke());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇪');
        $this->assertEquals((string) $flag, '🇰🇪');
    }

    public function testKG() {
        $flag = Flag::KG();

        $this->assertEquals($flag, Flag::kg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇬');
        $this->assertEquals((string) $flag, '🇰🇬');
    }

    public function testKH() {
        $flag = Flag::KH();

        $this->assertEquals($flag, Flag::kh());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇭');
        $this->assertEquals((string) $flag, '🇰🇭');
    }

    public function testKI() {
        $flag = Flag::KI();

        $this->assertEquals($flag, Flag::ki());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇮');
        $this->assertEquals((string) $flag, '🇰🇮');
    }

    public function testKM() {
        $flag = Flag::KM();

        $this->assertEquals($flag, Flag::km());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇲');
        $this->assertEquals((string) $flag, '🇰🇲');
    }

    public function testKN() {
        $flag = Flag::KN();

        $this->assertEquals($flag, Flag::kn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇳');
        $this->assertEquals((string) $flag, '🇰🇳');
    }

    public function testKP() {
        $flag = Flag::KP();

        $this->assertEquals($flag, Flag::kp());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1F5;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇵');
        $this->assertEquals((string) $flag, '🇰🇵');
    }

    public function testKR() {
        $flag = Flag::KR();

        $this->assertEquals($flag, Flag::kr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇷');
        $this->assertEquals((string) $flag, '🇰🇷');
    }

    public function testKW() {
        $flag = Flag::KW();

        $this->assertEquals($flag, Flag::kw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇼');
        $this->assertEquals((string) $flag, '🇰🇼');
    }

    public function testKY() {
        $flag = Flag::KY();

        $this->assertEquals($flag, Flag::ky());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇾');
        $this->assertEquals((string) $flag, '🇰🇾');
    }

    public function testKZ() {
        $flag = Flag::KZ();

        $this->assertEquals($flag, Flag::kz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F0;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇰🇿');
        $this->assertEquals((string) $flag, '🇰🇿');
    }

    public function testLA() {
        $flag = Flag::LA();

        $this->assertEquals($flag, Flag::la());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇦');
        $this->assertEquals((string) $flag, '🇱🇦');
    }

    public function testLB() {
        $flag = Flag::LB();

        $this->assertEquals($flag, Flag::lb());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1E7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇧');
        $this->assertEquals((string) $flag, '🇱🇧');
    }

    public function testLC() {
        $flag = Flag::LC();

        $this->assertEquals($flag, Flag::lc());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇨');
        $this->assertEquals((string) $flag, '🇱🇨');
    }

    public function testLI() {
        $flag = Flag::LI();

        $this->assertEquals($flag, Flag::li());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇮');
        $this->assertEquals((string) $flag, '🇱🇮');
    }

    public function testLK() {
        $flag = Flag::LK();

        $this->assertEquals($flag, Flag::lk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇰');
        $this->assertEquals((string) $flag, '🇱🇰');
    }

    public function testLR() {
        $flag = Flag::LR();

        $this->assertEquals($flag, Flag::lr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇷');
        $this->assertEquals((string) $flag, '🇱🇷');
    }

    public function testLS() {
        $flag = Flag::LS();

        $this->assertEquals($flag, Flag::ls());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇸');
        $this->assertEquals((string) $flag, '🇱🇸');
    }

    public function testLT() {
        $flag = Flag::LT();

        $this->assertEquals($flag, Flag::lt());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇹');
        $this->assertEquals((string) $flag, '🇱🇹');
    }

    public function testLU() {
        $flag = Flag::LU();

        $this->assertEquals($flag, Flag::lu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇺');
        $this->assertEquals((string) $flag, '🇱🇺');
    }

    public function testLV() {
        $flag = Flag::LV();

        $this->assertEquals($flag, Flag::lv());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1FB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇻');
        $this->assertEquals((string) $flag, '🇱🇻');
    }

    public function testLY() {
        $flag = Flag::LY();

        $this->assertEquals($flag, Flag::ly());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F1;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇱🇾');
        $this->assertEquals((string) $flag, '🇱🇾');
    }

    public function testMA() {
        $flag = Flag::MA();

        $this->assertEquals($flag, Flag::ma());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇦');
        $this->assertEquals((string) $flag, '🇲🇦');
    }

    public function testMC() {
        $flag = Flag::MC();

        $this->assertEquals($flag, Flag::mc());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇨');
        $this->assertEquals((string) $flag, '🇲🇨');
    }

    public function testMD() {
        $flag = Flag::MD();

        $this->assertEquals($flag, Flag::md());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇩');
        $this->assertEquals((string) $flag, '🇲🇩');
    }

    public function testME() {
        $flag = Flag::ME();

        $this->assertEquals($flag, Flag::me());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇪');
        $this->assertEquals((string) $flag, '🇲🇪');
    }

    public function testMF() {
        $flag = Flag::MF();

        $this->assertEquals($flag, Flag::mf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇫');
        $this->assertEquals((string) $flag, '🇲🇫');
    }

    public function testMG() {
        $flag = Flag::MG();

        $this->assertEquals($flag, Flag::mg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇬');
        $this->assertEquals((string) $flag, '🇲🇬');
    }

    public function testMH() {
        $flag = Flag::MH();

        $this->assertEquals($flag, Flag::mh());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇭');
        $this->assertEquals((string) $flag, '🇲🇭');
    }

    public function testMK() {
        $flag = Flag::MK();

        $this->assertEquals($flag, Flag::mk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇰');
        $this->assertEquals((string) $flag, '🇲🇰');
    }

    public function testML() {
        $flag = Flag::ML();

        $this->assertEquals($flag, Flag::ml());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇱');
        $this->assertEquals((string) $flag, '🇲🇱');
    }

    public function testMM() {
        $flag = Flag::MM();

        $this->assertEquals($flag, Flag::mm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇲');
        $this->assertEquals((string) $flag, '🇲🇲');
    }

    public function testMN() {
        $flag = Flag::MN();

        $this->assertEquals($flag, Flag::mn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇳');
        $this->assertEquals((string) $flag, '🇲🇳');
    }

    public function testMO() {
        $flag = Flag::MO();

        $this->assertEquals($flag, Flag::mo());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇴');
        $this->assertEquals((string) $flag, '🇲🇴');
    }

    public function testMP() {
        $flag = Flag::MP();

        $this->assertEquals($flag, Flag::mp());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F5;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇵');
        $this->assertEquals((string) $flag, '🇲🇵');
    }

    public function testMQ() {
        $flag = Flag::MQ();

        $this->assertEquals($flag, Flag::mq());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇶');
        $this->assertEquals((string) $flag, '🇲🇶');
    }

    public function testMR() {
        $flag = Flag::MR();

        $this->assertEquals($flag, Flag::mr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇷');
        $this->assertEquals((string) $flag, '🇲🇷');
    }

    public function testMS() {
        $flag = Flag::MS();

        $this->assertEquals($flag, Flag::ms());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇸');
        $this->assertEquals((string) $flag, '🇲🇸');
    }

    public function testMT() {
        $flag = Flag::MT();

        $this->assertEquals($flag, Flag::mt());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇹');
        $this->assertEquals((string) $flag, '🇲🇹');
    }

    public function testMU() {
        $flag = Flag::MU();

        $this->assertEquals($flag, Flag::mu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇺');
        $this->assertEquals((string) $flag, '🇲🇺');
    }

    public function testMV() {
        $flag = Flag::MV();

        $this->assertEquals($flag, Flag::mv());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1FB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇻');
        $this->assertEquals((string) $flag, '🇲🇻');
    }

    public function testMW() {
        $flag = Flag::MW();

        $this->assertEquals($flag, Flag::mw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇼');
        $this->assertEquals((string) $flag, '🇲🇼');
    }

    public function testMX() {
        $flag = Flag::MX();

        $this->assertEquals($flag, Flag::mx());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1FD;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇽');
        $this->assertEquals((string) $flag, '🇲🇽');
    }

    public function testMY() {
        $flag = Flag::MY();

        $this->assertEquals($flag, Flag::my());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇾');
        $this->assertEquals((string) $flag, '🇲🇾');
    }

    public function testMZ() {
        $flag = Flag::MZ();

        $this->assertEquals($flag, Flag::mz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F2;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇲🇿');
        $this->assertEquals((string) $flag, '🇲🇿');
    }

    public function testNA() {
        $flag = Flag::NA();

        $this->assertEquals($flag, Flag::na());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇦');
        $this->assertEquals((string) $flag, '🇳🇦');
    }

    public function testNC() {
        $flag = Flag::NC();

        $this->assertEquals($flag, Flag::nc());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇨');
        $this->assertEquals((string) $flag, '🇳🇨');
    }

    public function testNE() {
        $flag = Flag::NE();

        $this->assertEquals($flag, Flag::ne());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇪');
        $this->assertEquals((string) $flag, '🇳🇪');
    }

    public function testNF() {
        $flag = Flag::NF();

        $this->assertEquals($flag, Flag::nf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇫');
        $this->assertEquals((string) $flag, '🇳🇫');
    }

    public function testNG() {
        $flag = Flag::NG();

        $this->assertEquals($flag, Flag::ng());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇬');
        $this->assertEquals((string) $flag, '🇳🇬');
    }

    public function testNI() {
        $flag = Flag::NI();

        $this->assertEquals($flag, Flag::ni());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇮');
        $this->assertEquals((string) $flag, '🇳🇮');
    }

    public function testNL() {
        $flag = Flag::NL();

        $this->assertEquals($flag, Flag::nl());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇱');
        $this->assertEquals((string) $flag, '🇳🇱');
    }

    public function testNO() {
        $flag = Flag::NO();

        $this->assertEquals($flag, Flag::no());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇴');
        $this->assertEquals((string) $flag, '🇳🇴');
    }

    public function testNP() {
        $flag = Flag::NP();

        $this->assertEquals($flag, Flag::np());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1F5;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇵');
        $this->assertEquals((string) $flag, '🇳🇵');
    }

    public function testNR() {
        $flag = Flag::NR();

        $this->assertEquals($flag, Flag::nr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇷');
        $this->assertEquals((string) $flag, '🇳🇷');
    }

    public function testNU() {
        $flag = Flag::NU();

        $this->assertEquals($flag, Flag::nu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇺');
        $this->assertEquals((string) $flag, '🇳🇺');
    }

    public function testNZ() {
        $flag = Flag::NZ();

        $this->assertEquals($flag, Flag::nz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F3;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇳🇿');
        $this->assertEquals((string) $flag, '🇳🇿');
    }

    public function testOM() {
        $flag = Flag::OM();

        $this->assertEquals($flag, Flag::om());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F4;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇴🇲');
        $this->assertEquals((string) $flag, '🇴🇲');
    }

    public function testPA() {
        $flag = Flag::PA();

        $this->assertEquals($flag, Flag::pa());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇦');
        $this->assertEquals((string) $flag, '🇵🇦');
    }

    public function testPE() {
        $flag = Flag::PE();

        $this->assertEquals($flag, Flag::pe());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇪');
        $this->assertEquals((string) $flag, '🇵🇪');
    }

    public function testPF() {
        $flag = Flag::PF();

        $this->assertEquals($flag, Flag::pf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇫');
        $this->assertEquals((string) $flag, '🇵🇫');
    }

    public function testPG() {
        $flag = Flag::PG();

        $this->assertEquals($flag, Flag::pg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇬');
        $this->assertEquals((string) $flag, '🇵🇬');
    }

    public function testPH() {
        $flag = Flag::PH();

        $this->assertEquals($flag, Flag::ph());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇭');
        $this->assertEquals((string) $flag, '🇵🇭');
    }

    public function testPK() {
        $flag = Flag::PK();

        $this->assertEquals($flag, Flag::pk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇰');
        $this->assertEquals((string) $flag, '🇵🇰');
    }

    public function testPL() {
        $flag = Flag::PL();

        $this->assertEquals($flag, Flag::pl());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇱');
        $this->assertEquals((string) $flag, '🇵🇱');
    }

    public function testPM() {
        $flag = Flag::PM();

        $this->assertEquals($flag, Flag::pm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇲');
        $this->assertEquals((string) $flag, '🇵🇲');
    }

    public function testPN() {
        $flag = Flag::PN();

        $this->assertEquals($flag, Flag::pn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇳');
        $this->assertEquals((string) $flag, '🇵🇳');
    }

    public function testPR() {
        $flag = Flag::PR();

        $this->assertEquals($flag, Flag::pr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇷');
        $this->assertEquals((string) $flag, '🇵🇷');
    }

    public function testPS() {
        $flag = Flag::PS();

        $this->assertEquals($flag, Flag::ps());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇸');
        $this->assertEquals((string) $flag, '🇵🇸');
    }

    public function testPT() {
        $flag = Flag::PT();

        $this->assertEquals($flag, Flag::pt());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇹');
        $this->assertEquals((string) $flag, '🇵🇹');
    }

    public function testPW() {
        $flag = Flag::PW();

        $this->assertEquals($flag, Flag::pw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇼');
        $this->assertEquals((string) $flag, '🇵🇼');
    }

    public function testPY() {
        $flag = Flag::PY();

        $this->assertEquals($flag, Flag::py());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F5;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇵🇾');
        $this->assertEquals((string) $flag, '🇵🇾');
    }

    public function testQA() {
        $flag = Flag::QA();

        $this->assertEquals($flag, Flag::qa());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F6;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇶🇦');
        $this->assertEquals((string) $flag, '🇶🇦');
    }

    public function testRE() {
        $flag = Flag::RE();

        $this->assertEquals($flag, Flag::re());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F7;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇷🇪');
        $this->assertEquals((string) $flag, '🇷🇪');
    }

    public function testRO() {
        $flag = Flag::RO();

        $this->assertEquals($flag, Flag::ro());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F7;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇷🇴');
        $this->assertEquals((string) $flag, '🇷🇴');
    }

    public function testRS() {
        $flag = Flag::RS();

        $this->assertEquals($flag, Flag::rs());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F7;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇷🇸');
        $this->assertEquals((string) $flag, '🇷🇸');
    }

    public function testRU() {
        $flag = Flag::RU();

        $this->assertEquals($flag, Flag::ru());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F7;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇷🇺');
        $this->assertEquals((string) $flag, '🇷🇺');
    }

    public function testRW() {
        $flag = Flag::RW();

        $this->assertEquals($flag, Flag::rw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F7;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇷🇼');
        $this->assertEquals((string) $flag, '🇷🇼');
    }

    public function testSA() {
        $flag = Flag::SA();

        $this->assertEquals($flag, Flag::sa());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇦');
        $this->assertEquals((string) $flag, '🇸🇦');
    }

    public function testSB() {
        $flag = Flag::SB();

        $this->assertEquals($flag, Flag::sb());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1E7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇧');
        $this->assertEquals((string) $flag, '🇸🇧');
    }

    public function testSC() {
        $flag = Flag::SC();

        $this->assertEquals($flag, Flag::sc());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇨');
        $this->assertEquals((string) $flag, '🇸🇨');
    }

    public function testSD() {
        $flag = Flag::SD();

        $this->assertEquals($flag, Flag::sd());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇩');
        $this->assertEquals((string) $flag, '🇸🇩');
    }

    public function testSE() {
        $flag = Flag::SE();

        $this->assertEquals($flag, Flag::se());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇪');
        $this->assertEquals((string) $flag, '🇸🇪');
    }

    public function testSG() {
        $flag = Flag::SG();

        $this->assertEquals($flag, Flag::sg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇬');
        $this->assertEquals((string) $flag, '🇸🇬');
    }

    public function testSH() {
        $flag = Flag::SH();

        $this->assertEquals($flag, Flag::sh());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇭');
        $this->assertEquals((string) $flag, '🇸🇭');
    }

    public function testSI() {
        $flag = Flag::SI();

        $this->assertEquals($flag, Flag::si());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇮');
        $this->assertEquals((string) $flag, '🇸🇮');
    }

    public function testSJ() {
        $flag = Flag::SJ();

        $this->assertEquals($flag, Flag::sj());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1EF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇯');
        $this->assertEquals((string) $flag, '🇸🇯');
    }

    public function testSK() {
        $flag = Flag::SK();

        $this->assertEquals($flag, Flag::sk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇰');
        $this->assertEquals((string) $flag, '🇸🇰');
    }

    public function testSL() {
        $flag = Flag::SL();

        $this->assertEquals($flag, Flag::sl());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇱');
        $this->assertEquals((string) $flag, '🇸🇱');
    }

    public function testSM() {
        $flag = Flag::SM();

        $this->assertEquals($flag, Flag::sm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇲');
        $this->assertEquals((string) $flag, '🇸🇲');
    }

    public function testSN() {
        $flag = Flag::SN();

        $this->assertEquals($flag, Flag::sn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇳');
        $this->assertEquals((string) $flag, '🇸🇳');
    }

    public function testSO() {
        $flag = Flag::SO();

        $this->assertEquals($flag, Flag::so());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇴');
        $this->assertEquals((string) $flag, '🇸🇴');
    }

    public function testSR() {
        $flag = Flag::SR();

        $this->assertEquals($flag, Flag::sr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇷');
        $this->assertEquals((string) $flag, '🇸🇷');
    }

    public function testSS() {
        $flag = Flag::SS();

        $this->assertEquals($flag, Flag::ss());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇸');
        $this->assertEquals((string) $flag, '🇸🇸');
    }

    public function testST() {
        $flag = Flag::ST();

        $this->assertEquals($flag, Flag::st());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇹');
        $this->assertEquals((string) $flag, '🇸🇹');
    }

    public function testSV() {
        $flag = Flag::SV();

        $this->assertEquals($flag, Flag::sv());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1FB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇻');
        $this->assertEquals((string) $flag, '🇸🇻');
    }

    public function testSX() {
        $flag = Flag::SX();

        $this->assertEquals($flag, Flag::sx());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1FD;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇽');
        $this->assertEquals((string) $flag, '🇸🇽');
    }

    public function testSY() {
        $flag = Flag::SY();

        $this->assertEquals($flag, Flag::sy());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇾');
        $this->assertEquals((string) $flag, '🇸🇾');
    }

    public function testSZ() {
        $flag = Flag::SZ();

        $this->assertEquals($flag, Flag::sz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F8;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇸🇿');
        $this->assertEquals((string) $flag, '🇸🇿');
    }

    public function testTA() {
        $flag = Flag::TA();

        $this->assertEquals($flag, Flag::ta());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇦');
        $this->assertEquals((string) $flag, '🇹🇦');
    }

    public function testTC() {
        $flag = Flag::TC();

        $this->assertEquals($flag, Flag::tc());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇨');
        $this->assertEquals((string) $flag, '🇹🇨');
    }

    public function testTD() {
        $flag = Flag::TD();

        $this->assertEquals($flag, Flag::td());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1E9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇩');
        $this->assertEquals((string) $flag, '🇹🇩');
    }

    public function testTF() {
        $flag = Flag::TF();

        $this->assertEquals($flag, Flag::tf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇫');
        $this->assertEquals((string) $flag, '🇹🇫');
    }

    public function testTG() {
        $flag = Flag::TG();

        $this->assertEquals($flag, Flag::tg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇬');
        $this->assertEquals((string) $flag, '🇹🇬');
    }

    public function testTH() {
        $flag = Flag::TH();

        $this->assertEquals($flag, Flag::th());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1ED;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇭');
        $this->assertEquals((string) $flag, '🇹🇭');
    }

    public function testTJ() {
        $flag = Flag::TJ();

        $this->assertEquals($flag, Flag::tj());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1EF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇯');
        $this->assertEquals((string) $flag, '🇹🇯');
    }

    public function testTK() {
        $flag = Flag::TK();

        $this->assertEquals($flag, Flag::tk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇰');
        $this->assertEquals((string) $flag, '🇹🇰');
    }

    public function testTL() {
        $flag = Flag::TL();

        $this->assertEquals($flag, Flag::tl());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1F1;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇱');
        $this->assertEquals((string) $flag, '🇹🇱');
    }

    public function testTM() {
        $flag = Flag::TM();

        $this->assertEquals($flag, Flag::tm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇲');
        $this->assertEquals((string) $flag, '🇹🇲');
    }

    public function testTN() {
        $flag = Flag::TN();

        $this->assertEquals($flag, Flag::tn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇳');
        $this->assertEquals((string) $flag, '🇹🇳');
    }

    public function testTO() {
        $flag = Flag::TO();

        $this->assertEquals($flag, Flag::to());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1F4;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇴');
        $this->assertEquals((string) $flag, '🇹🇴');
    }

    public function testTR() {
        $flag = Flag::TR();

        $this->assertEquals($flag, Flag::tr());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1F7;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇷');
        $this->assertEquals((string) $flag, '🇹🇷');
    }

    public function testTT() {
        $flag = Flag::TT();

        $this->assertEquals($flag, Flag::tt());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇹');
        $this->assertEquals((string) $flag, '🇹🇹');
    }

    public function testTV() {
        $flag = Flag::TV();

        $this->assertEquals($flag, Flag::tv());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1FB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇻');
        $this->assertEquals((string) $flag, '🇹🇻');
    }

    public function testTW() {
        $flag = Flag::TW();

        $this->assertEquals($flag, Flag::tw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇼');
        $this->assertEquals((string) $flag, '🇹🇼');
    }

    public function testTZ() {
        $flag = Flag::TZ();

        $this->assertEquals($flag, Flag::tz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1F9;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇹🇿');
        $this->assertEquals((string) $flag, '🇹🇿');
    }

    public function testUA() {
        $flag = Flag::UA();

        $this->assertEquals($flag, Flag::ua());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FA;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇺🇦');
        $this->assertEquals((string) $flag, '🇺🇦');
    }

    public function testUG() {
        $flag = Flag::UG();

        $this->assertEquals($flag, Flag::ug());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FA;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇺🇬');
        $this->assertEquals((string) $flag, '🇺🇬');
    }

    public function testUM() {
        $flag = Flag::UM();

        $this->assertEquals($flag, Flag::um());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FA;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇺🇲');
        $this->assertEquals((string) $flag, '🇺🇲');
    }

    public function testUN() {
        $flag = Flag::UN();

        $this->assertEquals($flag, Flag::un());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FA;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇺🇳');
        $this->assertEquals((string) $flag, '🇺🇳');
    }

    public function testUS() {
        $flag = Flag::US();

        $this->assertEquals($flag, Flag::us());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FA;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇺🇸');
        $this->assertEquals((string) $flag, '🇺🇸');
    }

    public function testUY() {
        $flag = Flag::UY();

        $this->assertEquals($flag, Flag::uy());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FA;&#x1F1FE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇺🇾');
        $this->assertEquals((string) $flag, '🇺🇾');
    }

    public function testUZ() {
        $flag = Flag::UZ();

        $this->assertEquals($flag, Flag::uz());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FA;&#x1F1FF;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇺🇿');
        $this->assertEquals((string) $flag, '🇺🇿');
    }

    public function testVA() {
        $flag = Flag::VA();

        $this->assertEquals($flag, Flag::va());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FB;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇻🇦');
        $this->assertEquals((string) $flag, '🇻🇦');
    }

    public function testVC() {
        $flag = Flag::VC();

        $this->assertEquals($flag, Flag::vc());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FB;&#x1F1E8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇻🇨');
        $this->assertEquals((string) $flag, '🇻🇨');
    }

    public function testVE() {
        $flag = Flag::VE();

        $this->assertEquals($flag, Flag::ve());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FB;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇻🇪');
        $this->assertEquals((string) $flag, '🇻🇪');
    }

    public function testVG() {
        $flag = Flag::VG();

        $this->assertEquals($flag, Flag::vg());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FB;&#x1F1EC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇻🇬');
        $this->assertEquals((string) $flag, '🇻🇬');
    }

    public function testVI() {
        $flag = Flag::VI();

        $this->assertEquals($flag, Flag::vi());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FB;&#x1F1EE;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇻🇮');
        $this->assertEquals((string) $flag, '🇻🇮');
    }

    public function testVN() {
        $flag = Flag::VN();

        $this->assertEquals($flag, Flag::vn());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FB;&#x1F1F3;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇻🇳');
        $this->assertEquals((string) $flag, '🇻🇳');
    }

    public function testVU() {
        $flag = Flag::VU();

        $this->assertEquals($flag, Flag::vu());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FB;&#x1F1FA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇻🇺');
        $this->assertEquals((string) $flag, '🇻🇺');
    }

    public function testWF() {
        $flag = Flag::WF();

        $this->assertEquals($flag, Flag::wf());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FC;&#x1F1EB;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇼🇫');
        $this->assertEquals((string) $flag, '🇼🇫');
    }

    public function testWS() {
        $flag = Flag::WS();

        $this->assertEquals($flag, Flag::ws());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FC;&#x1F1F8;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇼🇸');
        $this->assertEquals((string) $flag, '🇼🇸');
    }

    public function testXK() {
        $flag = Flag::XK();

        $this->assertEquals($flag, Flag::xk());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FD;&#x1F1F0;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇽🇰');
        $this->assertEquals((string) $flag, '🇽🇰');
    }

    public function testYE() {
        $flag = Flag::YE();

        $this->assertEquals($flag, Flag::ye());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FE;&#x1F1EA;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇾🇪');
        $this->assertEquals((string) $flag, '🇾🇪');
    }

    public function testYT() {
        $flag = Flag::YT();

        $this->assertEquals($flag, Flag::yt());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FE;&#x1F1F9;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇾🇹');
        $this->assertEquals((string) $flag, '🇾🇹');
    }

    public function testZA() {
        $flag = Flag::ZA();

        $this->assertEquals($flag, Flag::za());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FF;&#x1F1E6;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇿🇦');
        $this->assertEquals((string) $flag, '🇿🇦');
    }

    public function testZM() {
        $flag = Flag::ZM();

        $this->assertEquals($flag, Flag::zm());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FF;&#x1F1F2;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇿🇲');
        $this->assertEquals((string) $flag, '🇿🇲');
    }

    public function testZW() {
        $flag = Flag::ZW();

        $this->assertEquals($flag, Flag::zw());
        $this->assertEquals($flag->toHTMLEntities(), '&#x1F1FF;&#x1F1FC;');
        $this->assertEquals($flag->toUnicodeSymbol(), '🇿🇼');
        $this->assertEquals((string) $flag, '🇿🇼');
    }
}
