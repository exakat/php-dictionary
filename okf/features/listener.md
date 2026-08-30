---
type: "PHP Feature"
title: "Listener"
description: "A listener is a callable function that is registered to handle a specific event or message when it is dispatched."
resource: "https://www.php-fig.org/psr/psr-14/"
tags: ["architecture", "messaging", "psr"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Listener

A listener is a callable function that is registered to handle a specific event or message when it is dispatched. Listeners are a core concept in event-driven and pub/sub architectures.

Listeners are commonly registered with an event dispatcher. When an event is dispatched, the dispatcher calls all registered listeners for that event type, passing the event object as an argument. Listeners may be prioritised, stoppable, or asynchronous.

PSR-14 standardises the event dispatcher interface, making listeners interoperable across frameworks. Symfony's EventDispatcher, Laravel's Events system, and many other frameworks implement this pattern.

A listener differs from an observer in that listeners are usually registered externally on a dispatcher, while observers are typically attached directly to the subject object they watch.

```php
<?php

// PSR-14 compliant listener
use App\Event\UserRegisteredEvent;

final class SendWelcomeEmailListener
{
    public function __invoke(UserRegisteredEvent $event): void
    {
        $user = $event->getUser();
        // send welcome email to $user->getEmail()
    }
}

// Registering the listener (Symfony example)
// In services.yaml:
// App\Listener\SendWelcomeEmailListener:
//     tags:
//         - { name: kernel.event_listener, event: App\Event\UserRegisteredEvent }

?>
```

## Documentation
- [https://www.php-fig.org/psr/psr-14/](https://www.php-fig.org/psr/psr-14/)

## See Also
- [Events and Event Listeners](https://symfony.com/doc/current/event_dispatcher.html)
- [Laravel Events](https://laravel.com/docs/events)

## Related
- [Pub/Sub](/features/pubsub.md)
- [Event Driven](/features/event-driven.md)
- [Message Bus](/features/message-bus.md)
- [Observer Design Pattern](/features/observer.md)
- [Decoupling](/features/decoupling.md)
- [Callbacks](/features/callback.md)
- [Hook](/features/hook.md)

## Details
- Packagist: [symfony/event-dispatcher](https://packagist.org/packages/symfony/event-dispatcher)
- Packagist: [league/event](https://packagist.org/packages/league/event)

