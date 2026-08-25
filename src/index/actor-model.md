# Actor Model
The Actor Model, introduced by ``Carl Hewitt`` in 1973, is a mathematical model of concurrent computation. Its fundamental unit is the actor: a lightweight, isolated entity with its own private state and a mailbox. Actors never share memory. All communication happens exclusively through asynchronous message passing.

When an actor receives a message it may:

+ Create new actors
+ Send messages to actors whose addresses it knows
+ Designate the behavior to use for the next message it receives

Because no memory is shared, race conditions and the need for explicit locks are eliminated by design.

PHP is single-threaded in its classic request/response model, so the Actor Model is not natively available in the language. However, several frameworks and extensions bring actor-like concurrency to PHP:

+ ``ReactPHP`` and ``AMPHP`` implement event loops with asynchronous message passing via promises and fibers.
+ ``Swoole`` / ``OpenSwoole`` provide coroutines and channels that enable actor-style communication.
+ The ``parallel`` extension gives true multi-threaded execution with channels for inter-thread messaging.
+ Libraries such as ``Phluxor`` implement explicit actor runtimes on top of these primitives.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html","name":"Actor Model","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:35:35 +0000","dateModified":"Tue, 11 Aug 2026 08:35:35 +0000","description":"The Actor Model, introduced by Carl Hewitt in 1973, is a mathematical model of concurrent computation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"]}],"alternateName":["actor"],"keywords":["concurrency"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parallel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/software-transactional-memory.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Actor_model"},{"@type":"CreativeWork","name":"ReactPHP","url":"https:\/\/reactphp.org\/"},{"@type":"CreativeWork","name":"AMPHP","url":"https:\/\/amphp.org\/"},{"@type":"CreativeWork","name":"Swoole","url":"https:\/\/www.swoole.com\/"},{"@type":"CreativeWork","name":"Phluxor","url":"https:\/\/phluxor.github.io\/"},{"@type":"CreativeWork","name":"parallel extension","url":"https:\/\/www.php.net\/manual\/en\/book.parallel.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"actor-model"}]}]}</script>
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
+ [Phluxor](https://phluxor.github.io/)
+ [parallel extension](https://www.php.net/manual/en/book.parallel.php)

## Related

+ [Concurrency](concurrency.html)
+ [Message Queue](message-queue.html)
+ [Fibers](fibers.html)
+ [Coroutine](coroutine.html)
+ [Asynchronous](asynchronous.html)
+ [Parallel](parallel.html)
+ [Race Condition](race-condition.html)
+ [Shared Memory](shared-memory.html)
+ [Immutable](immutable.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.html)
