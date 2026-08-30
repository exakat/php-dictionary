---
type: "PHP Feature"
title: "Pub/Sub"
description: "Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics."
resource: "https://www.php-fig.org/psr/psr-14/"
tags: ["architecture", "messaging"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php-fig.org/psr/psr-14/](https://www.php-fig.org/psr/psr-14/)

## See Also
- [Publish/Subscribe pattern (Wikipedia)](https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern)
- [Redis Pub/Sub](https://redis.io/docs/interact/pubsub/)

## Related
- [Message Bus](/features/message-bus.md)
- [Message Queue](/features/message-queue.md)
- [Event Driven](/features/event-driven.md)
- [Listener](/features/listener.md)
- [Observer Design Pattern](/features/observer.md)
- [Decoupling](/features/decoupling.md)
- [Server Sent Event (SSE)](/features/sse.md)
- [Websocket](/features/websocket.md)
- [Change Data Capture](/features/change-data-capture.md)
- [Event Streaming](/features/event-streaming.md)
- [Request-Response](/features/request-response.md)

## Details
- Packagist: [symfony/event-dispatcher](https://packagist.org/packages/symfony/event-dispatcher)
- Packagist: [league/event](https://packagist.org/packages/league/event)

