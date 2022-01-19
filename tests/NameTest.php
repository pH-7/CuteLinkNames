<?php

declare(strict_types=1);

namespace PH7\Link\Tests;

use PH7\Link\Name;
use PHPUnit\Framework\TestCase;

final class NameTest extends TestCase
{
    /**
     * @dataProvider linksProvider
     */
    public function testLinkName(string $link, string $expectedName): void
    {
        $actual = Name::parse($link);
        $this->assertSame($expectedName, $actual);
    }

    public function linksProvider(): array
    {
        return [
            [
                'http://myurl.com/path',
                'Myurl.com Path'
            ],
            [
                'https://pH7.me/about',
                'Ph7.me About'
            ]
        ];
    }
}
