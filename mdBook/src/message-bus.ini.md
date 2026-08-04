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

## See Also

+ [The Message Bus Pattern](https://en.wikipedia.org/wiki/Message_bus)
+ [Tactician Command Bus](https://tactician.thephpleague.com/)

Related : [Message Queue](Message Queue), [Command Bus](Command Bus), [Command Query Responsibility Segregation (CQRS)](Command Query Responsibility Segregation (CQRS)), [Event Driven](Event Driven), [Event Sourcing](Event Sourcing), [Pub/Sub](Pub/Sub), [Listener](Listener), [Middleware Pattern](Middleware Pattern), [Decoupling](Decoupling)
