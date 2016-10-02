<?php

namespace tests;

class SlugTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $source
     * @param $expected
     * @dataProvider dataProvider
     */
    public function testExample($source, $expected)
    {
        $this->assertEquals($expected, \Nerd\Sluggy\slugify($source));
    }

    public function dataProvider()
    {
        return [
            ['а', 'a'],
            ['б', 'b'],
            ['в', 'v'],
            ['г', 'g'],
            ['д', 'd'],
            ['е', 'e'],
            ['ж', 'zh'],
            ['з', 'z'],
            ['и', 'i'],
            ['й', 'j'],
            ['к', 'k'],
            ['л', 'l'],
            ['м',  'm'],
            ['н',  'n'],
            ['о', 'o'],
            ['п', 'p'],
            ['р', 'r'],
            ['с', 's'],
            ['т', 't'],
            ['у',  'u'],
            ['ф', 'f'],
            ['х', 'h'],
            ['ц', 'c'],
            ['ч', 'ch'],
            ['ш', 'sh'],
            ['щ', 'sch'],
            ['ы', 'y'],
            ['э', 'e'],
            ['ю', 'yu'],
            ['я', 'ya'],
            ['і', 'i'],
            ['ї', 'yi'],
            ['є', 'ye'],
            ['ґ', 'g'],
            ['I can\'t', 'i-cant'],
            ['§1. Internals', '1-internals'],
            ['Физкульт Привет!', 'fizkult-privet']
        ];
    }
}
