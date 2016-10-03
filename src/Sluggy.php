<?php

namespace Nerd\Sluggy;

/**
 * Slugify input string.
 *
 * @param string $text
 * @return string
 */
function slugify($text)
{
    $table = mergeTables(
        Tables\Common\TABLE,
        Tables\Cyrillic\TABLE
    );
    return translate($table, $text);
}

/**
 * Translate symbols in table and filter another.
 *
 * @param array $table
 * @param string $text
 * @return string
 */
function translate($table, $text)
{
    $text = trim($text);
    $text = mb_convert_case($text, MB_CASE_LOWER);
    $text = strtr($text, $table);
    $text = preg_replace('~(\W+)~u', '-', $text);
    $text = trim($text, '-');

    return $text;
}

/**
 * Merge translation tables.
 *
 * @param array ...$tables
 * @return array
 */
function mergeTables(...$tables)
{
    return array_merge(...$tables);
}
