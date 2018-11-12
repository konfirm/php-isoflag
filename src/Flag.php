<?php

namespace Konfirm\ISOFlag;


/**
 * Class Flag
 * @package Konfirm\ISOFlag
 *
 * @method Flag AC
 * @method Flag AD
 * @method Flag AE
 * @method Flag AF
 * @method Flag AG
 * @method Flag AI
 * @method Flag AL
 * @method Flag AM
 * @method Flag AO
 * @method Flag AQ
 * @method Flag AR
 * @method Flag AS
 * @method Flag AT
 * @method Flag AU
 * @method Flag AW
 * @method Flag AX
 * @method Flag AZ
 * @method Flag BA
 * @method Flag BB
 * @method Flag BD
 * @method Flag BE
 * @method Flag BF
 * @method Flag BG
 * @method Flag BH
 * @method Flag BI
 * @method Flag BJ
 * @method Flag BL
 * @method Flag BM
 * @method Flag BN
 * @method Flag BO
 * @method Flag BQ
 * @method Flag BR
 * @method Flag BS
 * @method Flag BT
 * @method Flag BV
 * @method Flag BW
 * @method Flag BY
 * @method Flag BZ
 * @method Flag CA
 * @method Flag CC
 * @method Flag CD
 * @method Flag CF
 * @method Flag CG
 * @method Flag CH
 * @method Flag CI
 * @method Flag CK
 * @method Flag CL
 * @method Flag CM
 * @method Flag CN
 * @method Flag CO
 * @method Flag CP
 * @method Flag CR
 * @method Flag CU
 * @method Flag CV
 * @method Flag CW
 * @method Flag CX
 * @method Flag CY
 * @method Flag CZ
 * @method Flag DE
 * @method Flag DG
 * @method Flag DJ
 * @method Flag DK
 * @method Flag DM
 * @method Flag DO
 * @method Flag DZ
 * @method Flag EA
 * @method Flag EC
 * @method Flag EE
 * @method Flag EG
 * @method Flag EH
 * @method Flag ER
 * @method Flag ES
 * @method Flag ET
 * @method Flag EU
 * @method Flag FI
 * @method Flag FJ
 * @method Flag FK
 * @method Flag FM
 * @method Flag FO
 * @method Flag FR
 * @method Flag GA
 * @method Flag GB
 * @method Flag GD
 * @method Flag GE
 * @method Flag GF
 * @method Flag GG
 * @method Flag GH
 * @method Flag GI
 * @method Flag GL
 * @method Flag GM
 * @method Flag GN
 * @method Flag GP
 * @method Flag GQ
 * @method Flag GR
 * @method Flag GS
 * @method Flag GT
 * @method Flag GU
 * @method Flag GW
 * @method Flag GY
 * @method Flag HK
 * @method Flag HM
 * @method Flag HN
 * @method Flag HR
 * @method Flag HT
 * @method Flag HU
 * @method Flag IC
 * @method Flag ID
 * @method Flag IE
 * @method Flag IL
 * @method Flag IM
 * @method Flag IN
 * @method Flag IO
 * @method Flag IQ
 * @method Flag IR
 * @method Flag IS
 * @method Flag IT
 * @method Flag JE
 * @method Flag JM
 * @method Flag JO
 * @method Flag JP
 * @method Flag KE
 * @method Flag KG
 * @method Flag KH
 * @method Flag KI
 * @method Flag KM
 * @method Flag KN
 * @method Flag KP
 * @method Flag KR
 * @method Flag KW
 * @method Flag KY
 * @method Flag KZ
 * @method Flag LA
 * @method Flag LB
 * @method Flag LC
 * @method Flag LI
 * @method Flag LK
 * @method Flag LR
 * @method Flag LS
 * @method Flag LT
 * @method Flag LU
 * @method Flag LV
 * @method Flag LY
 * @method Flag MA
 * @method Flag MC
 * @method Flag MD
 * @method Flag ME
 * @method Flag MF
 * @method Flag MG
 * @method Flag MH
 * @method Flag MK
 * @method Flag ML
 * @method Flag MM
 * @method Flag MN
 * @method Flag MO
 * @method Flag MP
 * @method Flag MQ
 * @method Flag MR
 * @method Flag MS
 * @method Flag MT
 * @method Flag MU
 * @method Flag MV
 * @method Flag MW
 * @method Flag MX
 * @method Flag MY
 * @method Flag MZ
 * @method Flag NA
 * @method Flag NC
 * @method Flag NE
 * @method Flag NF
 * @method Flag NG
 * @method Flag NI
 * @method Flag NL
 * @method Flag NO
 * @method Flag NP
 * @method Flag NR
 * @method Flag NU
 * @method Flag NZ
 * @method Flag OM
 * @method Flag PA
 * @method Flag PE
 * @method Flag PF
 * @method Flag PG
 * @method Flag PH
 * @method Flag PK
 * @method Flag PL
 * @method Flag PM
 * @method Flag PN
 * @method Flag PR
 * @method Flag PS
 * @method Flag PT
 * @method Flag PW
 * @method Flag PY
 * @method Flag QA
 * @method Flag RE
 * @method Flag RO
 * @method Flag RS
 * @method Flag RU
 * @method Flag RW
 * @method Flag SA
 * @method Flag SB
 * @method Flag SC
 * @method Flag SD
 * @method Flag SE
 * @method Flag SG
 * @method Flag SH
 * @method Flag SI
 * @method Flag SJ
 * @method Flag SK
 * @method Flag SL
 * @method Flag SM
 * @method Flag SN
 * @method Flag SO
 * @method Flag SR
 * @method Flag SS
 * @method Flag ST
 * @method Flag SV
 * @method Flag SX
 * @method Flag SY
 * @method Flag SZ
 * @method Flag TA
 * @method Flag TC
 * @method Flag TD
 * @method Flag TF
 * @method Flag TG
 * @method Flag TH
 * @method Flag TJ
 * @method Flag TK
 * @method Flag TL
 * @method Flag TM
 * @method Flag TN
 * @method Flag TO
 * @method Flag TR
 * @method Flag TT
 * @method Flag TV
 * @method Flag TW
 * @method Flag TZ
 * @method Flag UA
 * @method Flag UG
 * @method Flag UM
 * @method Flag UN
 * @method Flag US
 * @method Flag UY
 * @method Flag UZ
 * @method Flag VA
 * @method Flag VC
 * @method Flag VE
 * @method Flag VG
 * @method Flag VI
 * @method Flag VN
 * @method Flag VU
 * @method Flag WF
 * @method Flag WS
 * @method Flag XK
 * @method Flag YE
 * @method Flag YT
 * @method Flag ZA
 * @method Flag ZM
 * @method Flag ZW
 */
class Flag
{
    /**
     * @var string
     */
    protected $iso;


    /**
     * Flag constructor
     * @param $iso
     * @throws InvalidCountryCodeException
     */
    public function __construct(string $iso)
    {
        if (!static::hasFlag($iso)) {
            throw new InvalidCountryCodeException('Invalid ISO3166 Alpha 2 region');
        }

        $this->iso = $iso;
    }

    /**
     * Represent the region flag as HTML entities
     * @return string
     */
    public function toHTMLEntities()
    {
        return implode('', array_map(function ($codepoint) {
            return sprintf('&#x%X;', $codepoint);
        }, $this->getUnicode()));
    }

    /**
     * Represent the region flag as string
     * @return string
     */
    public function toUnicodeSymbol()
    {
        return mb_convert_encoding($this->toHTMLEntities(), 'UTF-8', 'HTML-ENTITIES');
    }

    /**
     * Convert the Flag instance to string
     * @return string
     */
    public function __toString()
    {
        return $this->toUnicodeSymbol();
    }

    /**
     * Factory an iso region code into a flag instance, these are cached to allow equality comparison
     * @param $iso
     * @return Flag
     * @throws InvalidCountryCodeException
     */
    public static function __callStatic(string $iso, $args)
    {
        $code = strtoupper($iso);
        static $cache = [];

        if (!isset($cache[$code])) {
            $cache[$code] = new static($code);
        }

        return $cache[$code];
    }

    /**
     * Determine whether or not the given string can be converted into a Unicode flag
     * @param string $iso
     * @return bool
     */
    public static function hasFlag(string $iso) {
        $pattern = '/^(A[^ABHJKNPVY]|B[^CKPUX]|C[^BEJQST]|D[EGJKMOZ]|E[ACEGHR-U]|F[IJKMOR]|G[^CJKOVXZ]|H[KMNRTU]|I[CDEL-OQ-T]|J[EMOP]|K[EGHIMNPRWYZ]|L[ABCIKR-VY]|M[^BIJ]|N[ACEFGILOPRUZ]|OM|P[AE-HK-NRSTWY]|QA|R[EOSUW]|S[^FPQUW]|T[^BEIPQSUXY]|U[AGMNSYZ]|V[ACEGINU]|W[FS]|XK|Y[ET]|Z[AMW])$/i';

        return (bool) preg_match($pattern, $iso);
    }

    /**
     * Map the ISO region code to its unicode codepoints
     * @return array
     */
    protected function getUnicode()
    {
        $table = array_map('chr', range(65, 90));
        $offset = 0x1f1e6;

        return array_map(function ($char) use ($table, $offset) {
            return $offset + array_search($char, $table);
        }, str_split(strtoupper($this->iso)));
    }
}
