# Pub/Sub
Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics.

This decoupling makes pubsub well-suited for event-driven architectures, microservice communication, and real-time notification systems.

Pub/Sub can be implemented:

+ In-process:  using an event dispatcher
+ Via message brokers:  using Redis Pub/Sub, AMQP, Apache Kafka, or Google Cloud Pub/Sub, accessed through PHP client libraries
+ Via Server-Sent Events, SSE or WebSockets:  for real-time browser notifications.

pubsub differs from a message queue in that a queue typically delivers each message to a single consumer, while pubsub delivers to all active subscribers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pubsub.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pubsub.html","name":"Pub\/Sub","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:56 +0000","dateModified":"Mon, 13 Jul 2026 18:47:56 +0000","description":"Publish\/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Pub\/Sub.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php-fig.org/psr/psr-14/)**
## See Also

+ [Publish/Subscribe pattern (Wikipedia)](https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern)
+ [Redis Pub/Sub](https://redis.io/docs/interact/pubsub/)

## Related

+ [Message Bus](message-bus.ini.html)
+ [Message Queue](message-queue.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Listener](listener.ini.html)
+ [Observer Design Pattern](observer.ini.html)
+ [Decoupling](decoupling.ini.html)
+ [Server Sent Event (SSE)](sse.ini.html)
+ [Websocket](websocket.ini.html)
+ [Change Data Capture](change-data-capture.ini.html)
+ [Event Streaming](event-streaming.ini.html)
+ [Request-Response](request-response.ini.html)

## Related packages

+ [symfony/event-dispatcher](https://packagist.org/packages/symfony/event-dispatcher)
+ [league/event](https://packagist.org/packages/league/event)
