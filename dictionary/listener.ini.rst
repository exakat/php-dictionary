.. _listener:
.. _event-listener:
.. _subscriber:
.. meta::
	:description:
		Listener: A listener is a callable function that is registered to handle a specific event or message when it is dispatched.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Listener
	:twitter:description: Listener: A listener is a callable function that is registered to handle a specific event or message when it is dispatched
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Listener
	:og:type: article
	:og:description: A listener is a callable function that is registered to handle a specific event or message when it is dispatched
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/listener.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/listener.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/listener.ini.html","name":"Listener","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:07:36 +0000","dateModified":"Tue, 07 Jul 2026 05:07:36 +0000","description":"A listener is a callable function that is registered to handle a specific event or message when it is dispatched","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Listener.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Listener
--------

A listener is a callable function that is registered to handle a specific event or message when it is dispatched. Listeners are a core concept in event-driven and pub/sub architectures.

Listeners are commonly registered with an event dispatcher. When an event is dispatched, the dispatcher calls all registered listeners for that event type, passing the event object as an argument. Listeners may be prioritised, stoppable, or asynchronous.

PSR-14 standardises the event dispatcher interface, making listeners interoperable across frameworks. Symfony's EventDispatcher, Laravel's Events system, and many other frameworks implement this pattern.

A listener differs from an observer in that listeners are usually registered externally on a dispatcher, while observers are typically attached directly to the subject object they watch.

.. code-block:: php
   
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


`Documentation <https://www.php-fig.org/psr/psr-14/>`__

See also `Events and Event Listeners <https://symfony.com/doc/current/event_dispatcher.html>`_ and `Laravel Events <https://laravel.com/docs/events>`_.

Related : :ref:`Pub/Sub <pubsub>`, :ref:`Event Driven <event-driven>`, :ref:`Message Bus <message-bus>`, :ref:`Observer Design Pattern <observer>`, :ref:`Decoupling <decoupling>`, :ref:`Callbacks <callback>`, :ref:`Hook <hook>`

Related packages : `symfony/event-dispatcher <https://packagist.org/packages/symfony/event-dispatcher>`_, `league/event <https://packagist.org/packages/league/event>`_
