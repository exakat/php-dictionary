.. _message-bus:
.. _event-bus:
.. meta::
	:description:
		Message Bus: A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Message Bus
	:twitter:description: Message Bus: A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Message Bus
	:og:type: article
	:og:description: A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/message-bus.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/message-bus.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/message-bus.ini.html","name":"Message Bus","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:11:48 +0000","dateModified":"Tue, 07 Jul 2026 05:11:48 +0000","description":"A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Message Bus.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Message Bus
-----------

A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner. It acts as an intermediary channel through which senders publish messages and receivers consume them, without either party having direct knowledge of the other.

In applications, a message bus is typically implemented as an synchronous in-process dispatcher or as a wrapper around an asynchronous external message broker. The Symfony Messenger component is a popular PHP implementation that supports both modes and can route messages to queues backed by AMQP, Redis, Doctrine, or other transports.

A message bus often covers three patterns:

+ Command bus: routes commands to a single handler.
+ Event bus: broadcasts domain events to multiple listeners.
+ Query bus: routes queries to a single handler that returns a result.

Using a message bus decouples the code that sends a message from the code that handles it, improving maintainability, testability, and scalability.

.. code-block:: php
   
   <?php
   
       // Symfony Messenger: dispatching a command
       use App\Message\SendEmailNotification;
       use Symfony\Component\Messenger\MessageBusInterface;
       
       final class UserRegistrationService
       {
           public function __construct(
               private readonly MessageBusInterface $bus,
           ) {}
       
           public function register(string $email): void
           {
               // ... persist the user ...
       
               $this->bus->dispatch(new SendEmailNotification($email));
           }
       }
   
   ?>


`Documentation <https://symfony.com/doc/current/messenger.html>`__

See also `The Message Bus Pattern <https://en.wikipedia.org/wiki/Message_bus>`_ and `Tactician Command Bus <https://tactician.thephpleague.com/>`_.

Related : :ref:`Message Queue <message-queue>`, :ref:`Command Bus <command-bus>`, :ref:`Command Query Responsibility Segregation (CQRS) <cqrs>`, :ref:`Event Driven <event-driven>`, :ref:`Event Sourcing <event-sourcing>`, :ref:`Pub/Sub <pubsub>`, :ref:`Listener <listener>`, :ref:`Middleware Pattern <middleware>`, :ref:`Decoupling <decoupling>`

Related packages : `symfony/messenger <https://packagist.org/packages/symfony/messenger>`_, `league/tactician <https://packagist.org/packages/league/tactician>`_
