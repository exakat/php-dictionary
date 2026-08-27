# Message Bus
A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner. It acts as an intermediary channel through which senders publish messages and receivers consume them, without either party having direct knowledge of the other.

In applications, a message bus is typically implemented as an synchronous in-process dispatcher or as a wrapper around an asynchronous external message broker. The Symfony Messenger component is a popular PHP implementation that supports both modes and can route messages to queues backed by AMQP, Redis, Doctrine, or other transports.

A message bus often covers three patterns:

+ Command bus: routes commands to a single handler.
+ Event bus: broadcasts domain events to multiple listeners.
+ Query bus: routes queries to a single handler that returns a result.

Using a message bus decouples the code that sends a message from the code that handles it, improving maintainability, testability, and scalability.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-bus.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-bus.html","name":"Message Bus","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:11:48 +0000","dateModified":"Tue, 07 Jul 2026 05:11:48 +0000","description":"A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-bus.html"]}],"alternateName":["event-bus"],"keywords":["architecture","messaging"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command-bus.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cqrs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pubsub.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/listener.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decoupling.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/symfony.com\/doc\/current\/messenger.html"},{"@type":"CreativeWork","name":"The Message Bus Pattern","url":"https:\/\/en.wikipedia.org\/wiki\/Message_bus"},{"@type":"CreativeWork","name":"Tactician Command Bus","url":"https:\/\/tactician.thephpleague.com\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"message-bus"}]}]}</script>
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

+ [Message Queue](message-queue.html)
+ [Command Bus](command-bus.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.html)
+ [Event Driven](event-driven.html)
+ [Event Sourcing](event-sourcing.html)
+ [Pub/Sub](pubsub.html)
+ [Listener](listener.html)
+ [Middleware Pattern](middleware.html)
+ [Decoupling](decoupling.html)

## Related packages

+ [symfony/messenger](https://packagist.org/packages/symfony/messenger)
+ [league/tactician](https://packagist.org/packages/league/tactician)
