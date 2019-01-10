<?php
namespace Ignek\Testing;

class DomainEventAllListener implements \Ddd\Domain\DomainEventSubscriber
{
    public $events = [];

    public function handle($aDomainEvent)
    {
        $this->events[] = $aDomainEvent;
    }

    public function isSubscribedTo($aDomainEvent)
    {
        return true;
    }
}
