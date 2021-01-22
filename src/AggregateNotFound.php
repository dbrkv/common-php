<?php

declare(strict_types=1);


namespace Sunthera\Common;


use Exception;

final class AggregateNotFound extends Exception
{
    public static function withId(string $type, string $aggregateId): AggregateNotFound
    {
        return new self('Aggregate ' . $type . ' not found: ' . $aggregateId, 404);
    }
}
