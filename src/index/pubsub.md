# Pub/Sub
Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics.

This decoupling makes pubsub well-suited for event-driven architectures, microservice communication, and real-time notification systems.

Pub/Sub can be implemented:

+ In-process:  using an event dispatcher
+ Via message brokers:  using Redis Pub/Sub, AMQP, Apache Kafka, or Google Cloud Pub/Sub, accessed through PHP client libraries
+ Via Server-Sent Events, SSE or WebSockets:  for real-time browser notifications.

pubsub differs from a message queue in that a queue typically delivers each message to a single consumer, while pubsub delivers to all active subscribers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html","name":"Pub\/Sub","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:56 +0000","dateModified":"Mon, 13 Jul 2026 18:47:56 +0000","description":"Publish\/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html"]}],"alternateName":["publish-subscribe"],"keywords":["architecture","messaging"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-bus.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/listener.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/observer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decoupling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/websocket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/change-data-capture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-streaming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request-response.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php-fig.org\/psr\/psr-14\/"},{"@type":"CreativeWork","name":"Publish\/Subscribe pattern (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Publish%E2%80%93subscribe_pattern"},{"@type":"CreativeWork","name":"Redis Pub\/Sub","url":"https:\/\/redis.io\/docs\/interact\/pubsub\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pubsub"}]}]}</script>
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

+ [Message Bus](message-bus.html)
+ [Message Queue](message-queue.html)
+ [Event Driven](event-driven.html)
+ [Listener](listener.html)
+ [Observer Design Pattern](observer.html)
+ [Decoupling](decoupling.html)
+ [Server Sent Event (SSE)](sse.html)
+ [Websocket](websocket.html)
+ [Change Data Capture](change-data-capture.html)
+ [Event Streaming](event-streaming.html)
+ [Request-Response](request-response.html)

## Related packages

+ [symfony/event-dispatcher](https://packagist.org/packages/symfony/event-dispatcher)
+ [league/event](https://packagist.org/packages/league/event)
