<?php


class ArabicToRoman
{
    const MAP = [
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1,
    ];

    static function convert(int $number): string
    {
        $response = '';
        while (1 <= $number) {

            foreach (self::MAP as $roman => $arabic) {
                if ($arabic <= $number) {
                    $response .= $roman;
                    $number   -= $arabic;
                    break;
                }
            }

        }

        return $response;
    }
}