<?php
namespace Ignek\Testing;

use Ddd\Domain\DomainEventPublisher;

class CommonTestCase extends \PHPUnit_Framework_TestCase
{
    protected $listenerId;

    protected function setUp()
    {
        $this->listenerId = DomainEventPublisher::instance()->subscribe(
            new \Ignek\Testing\DomainEventAllListener
        );
    }

    protected function getListener()
    {
        return DomainEventPublisher::instance()->ofId($this->listenerId);
    }
}
