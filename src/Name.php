<?php

namespace PH7\Link;

final class Name
{
    private const REGEX_URL_FORMAT = '#(^https?://|www\.|\.[a-z]{2,4}/?$)#i';

    public static function parse(string $link): string
    {
        $link = strtolower($link);
        $linkName = preg_replace(self::REGEX_URL_FORMAT, '', $link);
        $linkName = str_replace('/', ' ', $linkName);

        return ucwords($linkName);
    }
}
