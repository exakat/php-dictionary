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

## See Also

+ [Events and Event Listeners](https://symfony.com/doc/current/event_dispatcher.html)
+ [Laravel Events](https://laravel.com/docs/events)

Related : [Pub/Sub](Pub/Sub), [Event Driven](Event Driven), [Message Bus](Message Bus), [Observer Design Pattern](Observer Design Pattern), [Decoupling](Decoupling), [Callbacks](Callbacks), [Hook](Hook)
