# Pub/Sub
Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics.

This decoupling makes pubsub well-suited for event-driven architectures, microservice communication, and real-time notification systems.

Pub/Sub can be implemented:

+ In-process:  using an event dispatcher
+ Via message brokers:  using Redis Pub/Sub, AMQP, Apache Kafka, or Google Cloud Pub/Sub, accessed through PHP client libraries
+ Via Server-Sent Events, SSE or WebSockets:  for real-time browser notifications.

pubsub differs from a message queue in that a queue typically delivers each message to a single consumer, while pubsub delivers to all active subscribers.
```php
<?php

// PSR-14 event dispatcher as an in-process Pub/Sub
use Psr\EventDispatcher\EventDispatcherInterface;

// Publisher
final class OrderService
{
    public function __construct(
        private readonly EventDispatcherInterface $dispatcher,
    ) {}

    public function placeOrder(Order $order): void
    {
        // ... persist order ...
        $this->dispatcher->dispatch(new OrderPlacedEvent($order));
    }
}

// Subscriber / Listener
final class SendOrderConfirmationListener
{
    public function __invoke(OrderPlacedEvent $event): void
    {
        // send confirmation email
    }
}

?>
```

## See Also

+ [Publish/Subscribe pattern (Wikipedia)](https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern)
+ [Redis Pub/Sub](https://redis.io/docs/interact/pubsub/)

Related : [Message Bus](Message Bus), [Message Queue](Message Queue), [Event Driven](Event Driven), [Listener](Listener), [Observer Design Pattern](Observer Design Pattern), [Decoupling](Decoupling), [Server Sent Event (SSE)](Server Sent Event (SSE)), [Websocket](Websocket), [Change Data Capture](Change Data Capture), [Event Streaming](Event Streaming), [Request-Response](Request-Response)
