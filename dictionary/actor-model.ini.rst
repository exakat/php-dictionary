.. _actor-model:
.. _actor:
.. meta::
	:description:
		Actor Model: The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Actor Model
	:twitter:description: Actor Model: The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Actor Model
	:og:type: article
	:og:description: The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/actor-model.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/actor-model.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/actor-model.ini.html","name":"Actor Model","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 17:41:41 +0000","dateModified":"Fri, 03 Jul 2026 17:41:41 +0000","description":"The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Actor Model.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Actor Model
-----------

The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation. Its fundamental unit is the actor: a lightweight, isolated entity with its own private state and a mailbox. Actors never share memory. All communication happens exclusively through asynchronous message passing.

When an actor receives a message it may:
+ Create new actors.
+ Send messages to actors whose addresses it knows.
+ Designate the behavior to use for the next message it receives (changing its own state).

Because no memory is shared, race conditions and the need for explicit locks are eliminated by design.

PHP is single-threaded in its classic request/response model, so the Actor Model is not natively available in the language. However, several frameworks and extensions bring actor-like concurrency to PHP:
+ ReactPHP and AMPHP implement event loops with async message passing via promises and fibers.
+ Swoole / OpenSwoole provide coroutines and channels that enable actor-style communication.
+ The ``parallel`` extension (PHP 7.2+) gives true multi-threaded execution with channels for inter-thread messaging.
+ Libraries such as Phluxor and Thespian implement explicit actor runtimes on top of these primitives.

.. code-block:: php
   
   <?php
   
      // Conceptual actor-style pattern using ReactPHP EventLoop
      // Each coroutine owns private state and communicates via channels (parallel ext)
   
      use parallel\{Runtime, Channel};
   
      $channel = new Channel();
   
      $actor = new Runtime();
      $actor->run(static function (Channel $inbox): void {
          while ($message = $inbox->recv()) {
              echo "Actor received: {$message}\n";
          }
      }, [$channel]);
   
      $channel->send('hello');
      $channel->send('world');
      $channel->close();
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Actor_model>`__

See also `ReactPHP <https://reactphp.org/>`_, `AMPHP <https://amphp.org/>`_, `Swoole <https://www.swoole.com/>`_ and `parallel extension <https://www.php.net/manual/en/book.parallel.php>`_.

Related : :ref:`Concurrency <concurrency>`, :ref:`Message Queue <message-queue>`, :ref:`Fibers <fibers>`, :ref:`Coroutine <coroutine>`, :ref:`Asynchronous <asynchronous>`, :ref:`Parallel <parallel>`, :ref:`Race Condition <race-condition>`, :ref:`Shared Memory <shared-memory>`, :ref:`Immutable <immutable>`, :ref:`Software Transactional Memory (STM) <software-transactional-memory>`
