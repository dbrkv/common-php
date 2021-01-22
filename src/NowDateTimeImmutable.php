<?php

declare(strict_types=1);


namespace Sunthera\Common;


use DateTimeImmutable;
use UnexpectedValueException;

final class NowDateTimeImmutable
{
    public static function create(): DateTimeImmutable
    {
        $now = time();
        $dateTime = DateTimeImmutable::createFromFormat('U', (string)$now);

        if (!$dateTime) {
            throw new UnexpectedValueException('Unable to create datetime from "' . $now . '"');
        }

        return $dateTime;
    }
}
