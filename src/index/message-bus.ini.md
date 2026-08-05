# Message Bus
A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner. It acts as an intermediary channel through which senders publish messages and receivers consume them, without either party having direct knowledge of the other.

In applications, a message bus is typically implemented as an synchronous in-process dispatcher or as a wrapper around an asynchronous external message broker. The Symfony Messenger component is a popular PHP implementation that supports both modes and can route messages to queues backed by AMQP, Redis, Doctrine, or other transports.

A message bus often covers three patterns:

+ Command bus: routes commands to a single handler.
+ Event bus: broadcasts domain events to multiple listeners.
+ Query bus: routes queries to a single handler that returns a result.

Using a message bus decouples the code that sends a message from the code that handles it, improving maintainability, testability, and scalability.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/message-bus.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/message-bus.ini.html","name":"Message Bus","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:11:48 +0000","dateModified":"Tue, 07 Jul 2026 05:11:48 +0000","description":"A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Message Bus.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
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
```

**[Documentation](https://symfony.com/doc/current/messenger.html)**
## See Also

+ [The Message Bus Pattern](https://en.wikipedia.org/wiki/Message_bus)
+ [Tactician Command Bus](https://tactician.thephpleague.com/)

## Related

+ [Message Queue](message-queue.ini.html)
+ [Command Bus](command-bus.ini.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Event Sourcing](event-sourcing.ini.html)
+ [Pub/Sub](pubsub.ini.html)
+ [Listener](listener.ini.html)
+ [Middleware Pattern](middleware.ini.html)
+ [Decoupling](decoupling.ini.html)

## Related packages

+ [symfony/messenger](https://packagist.org/packages/symfony/messenger)
+ [league/tactician](https://packagist.org/packages/league/tactician)
