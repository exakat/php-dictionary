# Actor Model
The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation. Its fundamental unit is the actor: a lightweight, isolated entity with its own private state and a mailbox. Actors never share memory. All communication happens exclusively through asynchronous message passing.

When an actor receives a message it may:

+ Create new actors
+ Send messages to actors whose addresses it knows
+ Designate the behavior to use for the next message it receives

Because no memory is shared, race conditions and the need for explicit locks are eliminated by design.

PHP is single-threaded in its classic request/response model, so the Actor Model is not natively available in the language. However, several frameworks and extensions bring actor-like concurrency to PHP:

+ ReactPHP and AMPHP implement event loops with async message passing via promises and fibers.
+ Swoole / OpenSwoole provide coroutines and channels that enable actor-style communication.
+ The ``parallel`` extension gives true multi-threaded execution with channels for inter-thread messaging.
+ Libraries such as Phluxor and Thespian implement explicit actor runtimes on top of these primitives.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/actor-model.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/actor-model.ini.html","name":"Actor Model","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:12:25 +0000","dateModified":"Thu, 16 Jul 2026 08:12:25 +0000","description":"The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Actor Model.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
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
```

**[Documentation](https://en.wikipedia.org/wiki/Actor_model)**
## See Also

+ [ReactPHP](https://reactphp.org/)
+ [AMPHP](https://amphp.org/)
+ [Swoole](https://www.swoole.com/)
+ [parallel extension](https://www.php.net/manual/en/book.parallel.php)

## Related

+ [Concurrency](concurrency.ini.html)
+ [Message Queue](message-queue.ini.html)
+ [Fibers](fibers.ini.html)
+ [Coroutine](coroutine.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Parallel](parallel.ini.html)
+ [Race Condition](race-condition.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Immutable](immutable.ini.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.ini.html)
