<?php

namespace Junges\Kafka\Tests\Fakes;

use RdKafka\Message;

class FakeConsumer
{
    private Message $message;

    public function __invoke(Message $message)
    {
        $this->message = $message;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }
}