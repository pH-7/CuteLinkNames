<?php
/**
 * Pierre-Henry Soria <hi@ph7.me>
 * Copyright 2022 Pierre-Henry Soria
 * MIT License - https://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace PH7\Link\Tests;

use PH7\Link\Name;
use PHPUnit\Framework\TestCase;

final class NameTest extends TestCase
{
    /**
     * @dataProvider urlAndNamesProvider
     */
    public function testLinkName(string $url, string $expectedName): void
    {
        $actual = Name::parse($url);
        $this->assertSame($expectedName, $actual);
    }

    public function urlAndNamesProvider(): array
    {
        return [
            [
                'http://ph7.me/',
                'Ph7'
            ],
            [
                'http://myurl.com/path',
                'Myurl.com Path'
            ],
            [
                'https://pH7.me/about',
                'Ph7.me About'
            ],
            [
                'https://ph7.me/link-name-convertor-snippet.png',
                'Ph7.me Link-name-convertor-snippet'
            ],
            [
                'https://www.pierrehenry.be?myparam=value-foo-bar',
                'Pierrehenry.be?myparam=value-foo-bar'
            ]
        ];
    }
}
