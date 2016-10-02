<?php

namespace Nerd\Sluggy;

/**
 * @param string $text
 * @return string
 */
function slugify($text)
{
    $translation = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm',
        'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh',
        'щ' => 'sch', 'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'і' => 'i',
        'ї' => 'yi', 'є' => 'ye', 'ґ' => 'g', 'е' => 'e',
        '\'' => '', '"' => '', '`' => '', 'ь' => '', 'ъ' => ''
    ];

    $text = trim($text);
    $text = mb_convert_case($text, MB_CASE_LOWER);
    $text = strtr($text, $translation);
    $text = preg_replace('~(\W+)~u', '-', $text);
    $text = trim($text, '-');

    return $text;
}
