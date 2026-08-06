# Listener
A listener is a callable function that is registered to handle a specific event or message when it is dispatched. Listeners are a core concept in event-driven and pub/sub architectures.

Listeners are commonly registered with an event dispatcher. When an event is dispatched, the dispatcher calls all registered listeners for that event type, passing the event object as an argument. Listeners may be prioritised, stoppable, or asynchronous.

PSR-14 standardises the event dispatcher interface, making listeners interoperable across frameworks. Symfony's EventDispatcher, Laravel's Events system, and many other frameworks implement this pattern.

A listener differs from an observer in that listeners are usually registered externally on a dispatcher, while observers are typically attached directly to the subject object they watch.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/listener.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/listener.html","name":"Listener","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:07:36 +0000","dateModified":"Tue, 07 Jul 2026 05:07:36 +0000","description":"A listener is a callable function that is registered to handle a specific event or message when it is dispatched","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Listener.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php-fig.org/psr/psr-14/)**
## See Also

+ [Events and Event Listeners](https://symfony.com/doc/current/event_dispatcher.html)
+ [Laravel Events](https://laravel.com/docs/events)

## Related

+ [Pub/Sub](pubsub.ini.html)
+ [Event Driven](event-driven.ini.html)
+ [Message Bus](message-bus.ini.html)
+ [Observer Design Pattern](observer.ini.html)
+ [Decoupling](decoupling.ini.html)
+ [Callbacks](callback.ini.html)
+ [Hook](hook.ini.html)

## Related packages

+ [symfony/event-dispatcher](https://packagist.org/packages/symfony/event-dispatcher)
+ [league/event](https://packagist.org/packages/league/event)
