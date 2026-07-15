.. _pubsub:
.. _publish-subscribe:
.. meta::
	:description:
		Pub/Sub: Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pub/Sub
	:twitter:description: Pub/Sub: Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pub/Sub
	:og:type: article
	:og:description: Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pubsub.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pubsub.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pubsub.ini.html","name":"Pub\/Sub","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:56 +0000","dateModified":"Mon, 13 Jul 2026 18:47:56 +0000","description":"Publish\/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pub\/Sub.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pub/Sub
-------

Publish/Subscribe, or pubsub for short, is a messaging pattern in which message producers, the publishers, send messages to named channels or topics without knowing who will receive them, and message consumers, the subscribers, register interest in topics and receive only the messages published to those topics.

This decoupling makes pubsub well-suited for event-driven architectures, microservice communication, and real-time notification systems.

Pub/Sub can be implemented:

+ In-process:  using an event dispatcher
+ Via message brokers:  using Redis Pub/Sub, AMQP, Apache Kafka, or Google Cloud Pub/Sub, accessed through PHP client libraries
+ Via Server-Sent Events, SSE or WebSockets:  for real-time browser notifications.

pubsub differs from a message queue in that a queue typically delivers each message to a single consumer, while pubsub delivers to all active subscribers.

.. code-block:: php
   
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


`Documentation <https://www.php-fig.org/psr/psr-14/>`__

See also `Publish/Subscribe pattern (Wikipedia) <https://en.wikipedia.org/wiki/Publish%E2%80%93subscribe_pattern>`_ and `Redis Pub/Sub <https://redis.io/docs/interact/pubsub/>`_.

Related : :ref:`Message Bus <message-bus>`, :ref:`Message Queue <message-queue>`, :ref:`Event Driven <event-driven>`, :ref:`Listener <listener>`, :ref:`Observer Design Pattern <observer>`, :ref:`Decoupling <decoupling>`, :ref:`Server Sent Event (SSE) <sse>`, :ref:`Websocket <websocket>`, :ref:`Change Data Capture <change-data-capture>`, :ref:`Event Streaming <event-streaming>`, :ref:`Request-Response <request-response>`

Related packages : `symfony/event-dispatcher <https://packagist.org/packages/symfony/event-dispatcher>`_, `league/event <https://packagist.org/packages/league/event>`_
