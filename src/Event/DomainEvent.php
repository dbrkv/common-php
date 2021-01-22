<?php

declare(strict_types=1);


namespace Sunthera\Common\Event;


use DateTimeImmutable;

interface DomainEvent
{
    public function getType(): string;
    public function getId(): string;
    public function getOccurredOn(): DateTimeImmutable;
}
