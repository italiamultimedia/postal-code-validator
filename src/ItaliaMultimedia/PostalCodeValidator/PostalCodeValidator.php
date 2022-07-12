<?php

declare(strict_types=1);

namespace ItaliaMultimedia\PostalCodeValidator;

/**
* Postal code validator.
*
* General
*/
class PostalCodeValidator
{
    protected const PATTERN_D3D2 = '\\d{3} \\d{2}';
    protected const PATTERN_D4 = '\\d{4}';
    protected const PATTERN_D5 = '\\d{5}';
    protected const PATTERN_D6 = '\\d{6}';

    /**
    * @return array<string,string>
    */
    // phpcs:ignore SlevomatCodingStandard.Functions.FunctionLength.FunctionLength, SlevomatCodingStandard.Files.FunctionLength.FunctionLength
    public function getPatterns(): array
    {
        return [
            'AT' => self::PATTERN_D4,
            'AU' => self::PATTERN_D4,
            'BG' => self::PATTERN_D4,
            'BE' => self::PATTERN_D4,
            /**
             * CA customization: make space mandatory, not optional.
             *
             * Original pattern:
             * '[ABCEGHJKLMNPRSTVXY]\\d[ABCEGHJ-NPRSTV-Z] ?\\d[ABCEGHJ-NPRSTV-Z]\\d'
             */
            'CA' => '[ABCEGHJKLMNPRSTVXY]\\d[ABCEGHJ-NPRSTV-Z] \\d[ABCEGHJ-NPRSTV-Z]\\d',
            'CH' => self::PATTERN_D4,
            'CN' => self::PATTERN_D6,
            'CY' => self::PATTERN_D4,
            'CZ' => self::PATTERN_D3D2,
            'DE' => self::PATTERN_D5,
            'DK' => self::PATTERN_D4,
            'EE' => self::PATTERN_D5,
            'ES' => self::PATTERN_D5,
            'FI' => self::PATTERN_D5,
            /**
             * FR customization: use 5 digits.
             *
             * Original pattern: '\\d{2} ?\\d{3}'
             */
            'FR' => self::PATTERN_D5,
            /**
             * GB customization: make space mandatory, not optional.
             *
             * Original pattern:
             * 'GIR ?0AA|(?:(?:AB|AL|B|BA|BB|BD|BH|BL|BN|BR|BS|BT|BX|CA|CB|CF|CH|CM|CO|CR|CT|CV|CW|DA|DD|DE|DG|'
             * 'DH|DL|DN|DT|DY|E|EC|EH|EN|EX|FK|FY|G|GL|GY|GU|HA|HD|HG|HP|HR|HS|HU|HX|IG|IM|IP|IV|JE|KA|KT|KW'
             * '|KY|L|LA|LD|LE|LL|LN|LS|LU|M|ME|MK|ML|N|NE|NG|NN|NP|NR|NW|OL|OX|PA|PE|PH|PL|PO|PR|RG|RH|RM|S'
             * '|SA|SE|SG|SK|SL|SM|SN|SO|SP|SR|SS|ST|SW|SY|TA|TD|TF|TN|TQ|TR|TS|TW|UB|W|WA|WC|WD|WF|WN|WR|WS|'
             * 'WV|YO|ZE)(?:\\d[\\dA-Z]? ?\\d[ABD-HJLN-UW-Z]{2}))|BFPO ?\\d{1,4}'
             */
            'GB' => 'GIR 0AA|(?:(?:AB|AL|B|BA|BB|BD|BH|BL|BN|BR|BS|BT|BX|CA|CB|CF|CH|CM|CO|CR|CT|CV|CW|DA|DD|DE|DG|'
            . 'DH|DL|DN|DT|DY|E|EC|EH|EN|EX|FK|FY|G|GL|GY|GU|HA|HD|HG|HP|HR|HS|HU|HX|IG|IM|IP|IV|JE|KA|KT|KW'
            . '|KY|L|LA|LD|LE|LL|LN|LS|LU|M|ME|MK|ML|N|NE|NG|NN|NP|NR|NW|OL|OX|PA|PE|PH|PL|PO|PR|RG|RH|RM|S'
            . '|SA|SE|SG|SK|SL|SM|SN|SO|SP|SR|SS|ST|SW|SY|TA|TD|TF|TN|TQ|TR|TS|TW|UB|W|WA|WC|WD|WF|WN|WR|WS|'
            . 'WV|YO|ZE)(?:\\d[\\dA-Z]? \\d[ABD-HJLN-UW-Z]{2}))|BFPO \\d{1,4}',
            'GR' => self::PATTERN_D3D2,
            'IT' => self::PATTERN_D5,
            'KR' => self::PATTERN_D5,
            'LI' => '948[5-9]|949[0-7]',
            'LT' => self::PATTERN_D5,
            /**
             * LV customization: remove prefix.
             *
             * Original pattern:'LV-\\d{4}'
             */
            'LV' => self::PATTERN_D4,
            'LU' => self::PATTERN_D4,
            'MX' => self::PATTERN_D5,
            /**
             * NL customization: make space mandatory, not optional.
             * Original pattern:
             * '\\d{4} ?[A-Z]{2}'
             */
            'NL' => '\\d{4} [A-Z]{2}',
            'NZ' => self::PATTERN_D4,
            'PL' => '\\d{2}-\\d{3}',
            'PT' => '\\d{4}-\\d{3}',
            'RO' => self::PATTERN_D6,
            'RU' => self::PATTERN_D6,
            'SE' => self::PATTERN_D3D2,
            'SI' => self::PATTERN_D4,
            'SK' => self::PATTERN_D3D2,
            'SM' => '4789\\d',
            'UA' => self::PATTERN_D5,
            'US' => '(\\d{5})(?:[ \\-](\\d{4}))?',
        ];
    }

    public function validate(string $countryCode, string $postalCode): bool
    {
        $patterns = $this->getPatterns();
        if (!\array_key_exists($countryCode, $patterns)) {
            throw new PostalCodeValidatorException(
                \sprintf('Country not implemented: "%s".', $countryCode),
            );
        }
        return \preg_match(\sprintf('/^%s$/', $patterns[$countryCode]), $postalCode) === 1;
    }
}
