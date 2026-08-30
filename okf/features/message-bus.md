---
type: "PHP Feature"
title: "Message Bus"
description: "A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner."
resource: "https://symfony.com/doc/current/messenger.html"
tags: ["architecture", "messaging"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Message Bus

A message bus is a communication mechanism that allows different components or services to exchange messages in a decoupled manner. It acts as an intermediary channel through which senders publish messages and receivers consume them, without either party having direct knowledge of the other.

In applications, a message bus is typically implemented as an synchronous in-process dispatcher or as a wrapper around an asynchronous external message broker. The Symfony Messenger component is a popular PHP implementation that supports both modes and can route messages to queues backed by AMQP, Redis, Doctrine, or other transports.

A message bus often covers three patterns:

+ Command bus: routes commands to a single handler.
+ Event bus: broadcasts domain events to multiple listeners.
+ Query bus: routes queries to a single handler that returns a result.

Using a message bus decouples the code that sends a message from the code that handles it, improving maintainability, testability, and scalability.

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

## Documentation
- [https://symfony.com/doc/current/messenger.html](https://symfony.com/doc/current/messenger.html)

## See Also
- [The Message Bus Pattern](https://en.wikipedia.org/wiki/Message_bus)
- [Tactician Command Bus](https://tactician.thephpleague.com/)

## Related
- [Message Queue](/features/message-queue.md)
- [Command Bus](/features/command-bus.md)
- [Command Query Responsibility Segregation (CQRS)](/features/cqrs.md)
- [Event Driven](/features/event-driven.md)
- [Event Sourcing](/features/event-sourcing.md)
- [Pub/Sub](/features/pubsub.md)
- [Listener](/features/listener.md)
- [Middleware Pattern](/features/middleware.md)
- [Decoupling](/features/decoupling.md)

## Details
- Packagist: [symfony/messenger](https://packagist.org/packages/symfony/messenger)
- Packagist: [league/tactician](https://packagist.org/packages/league/tactician)

