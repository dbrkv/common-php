<?php

declare(strict_types=1);


namespace Sunthera\Common\Event;


trait HasEvents
{
    /**
     * @var DomainEvent[]
     */
    private array $recordedEvents = [];

    protected function recordThat(DomainEvent $event): void
    {
        $this->recordedEvents[] = $event;
    }

    /**
     * @return DomainEvent[]
     *
     * @psalm-return array<DomainEvent>
     */
    public function popRecordedEvents(): array
    {
        $events = $this->recordedEvents;
        $this->recordedEvents = [];

        return $events;
    }
}
