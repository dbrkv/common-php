<?php

declare(strict_types=1);


namespace Sunthera\Common\Event;


use DateTimeImmutable;
use Sunthera\Common\NowDateTimeImmutable;
use Symfony\Component\Uid\Uuid;

abstract class ThinDomainEvent implements DomainEvent
{
    private string $id;
    private string $type;
    protected DateTimeImmutable $occurredOn;

    protected function __construct(string $type)
    {
        $this->id = (string)Uuid::v4();
        $this->type = $type;
        $this->occurredOn = NowDateTimeImmutable::create();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getOccurredOn(): DateTimeImmutable
    {
        return $this->occurredOn;
    }
}
