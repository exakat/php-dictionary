---
type: "PHP Feature"
title: "Actor Model"
description: "The Actor Model, introduced by ``Carl Hewitt`` in 1973, is a mathematical model of concurrent computation."
resource: "https://en.wikipedia.org/wiki/Actor_model"
tags: ["concurrency"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://en.wikipedia.org/wiki/Actor_model](https://en.wikipedia.org/wiki/Actor_model)

## See Also
- [ReactPHP](https://reactphp.org/)
- [AMPHP](https://amphp.org/)
- [Swoole](https://www.swoole.com/)
- [Phluxor](https://phluxor.github.io/)
- [parallel extension](https://www.php.net/manual/en/book.parallel.php)

## Related
- [Concurrency](/features/concurrency.md)
- [Message Queue](/features/message-queue.md)
- [Fibers](/features/fibers.md)
- [Coroutine](/features/coroutine.md)
- [Asynchronous](/features/asynchronous.md)
- [Parallel](/features/parallel.md)
- [Race Condition](/features/race-condition.md)
- [Shared Memory](/features/shared-memory.md)
- [Immutable](/features/immutable.md)
- [Software Transactional Memory (STM)](/features/software-transactional-memory.md)

