---
type: "PHP Feature"
title: "Software Transactional Memory (STM)"
description: "Software Transactional Memory, or STM, introduced by ``Shavit`` and ``Touitou`` in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations."
resource: "https://en.wikipedia.org/wiki/Software_transactional_memory"
tags: ["concurrency"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Software Transactional Memory (STM)

Software Transactional Memory, or STM, introduced by ``Shavit`` and ``Touitou`` in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations. Code that reads and writes shared variables is wrapped in a transaction block. The runtime tracks every read and write optimistically, without acquiring locks. When the transaction commits, the runtime checks whether any other transaction has modified the same memory locations. If a conflict is detected the transaction is rolled back and retried transparently; otherwise all writes are applied atomically.

The key properties of an STM transaction are:

+ Atomic: all writes commit as a single unit or none of them do.
+ Consistent: invariants are preserved across the transaction boundary.
+ Isolated: concurrent transactions cannot observe each other's intermediate state.

STM avoids the deadlocks and priority inversions of explicit lock-based code, and crucially allows transactions to be composed: two independently safe transactions can be merged into a larger safe transaction without modification.

PHP's classic model, one thread per request with no shared state, makes STM largely irrelevant in traditional PHP. It becomes meaningful when using:

+ The ``parallel`` extension, which gives threads access to a ``\parallel\Channel`` and ``\parallel\Future``, allowing structured inter-thread communication that approximates transactional semantics.
+ Swoole shared-memory tables, with ``Swoole\Table``, which provide atomic row-level operations across coroutines.
+ Database-backed STM, where the database engine itself provides MVCC and serializable isolation as a proxy for in-memory STM.

```php
<?php

   // Closest PHP analogue: parallel\Future as an atomic unit of work
   use parallel\{Runtime, Future};

   $runtime = new Runtime();

   // The closure runs in a separate thread; its return value is committed atomically
   $future = $runtime->run(static function (): int {
       $shared = 0;
       // read-modify-write happens inside an isolated thread
       $shared += 42;
       return $shared;
   });

   echo $future->value(); // 42: result committed atomically

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Software_transactional_memory](https://en.wikipedia.org/wiki/Software_transactional_memory)

## See Also
- [parallel extension](https://www.php.net/manual/en/book.parallel.php)
- [Swoole Table](https://wiki.swoole.com/en/#/memory/table)
- [Composable Memory Transactions (Haskell STM paper)](https://research.microsoft.com/en-us/um/people/simonpj/papers/stm/stm.pdf)

## Related
- [Concurrency](/features/concurrency.md)
- [Atomic Operation](/features/atomic-operation.md)
- [Transaction](/features/transaction.md)
- [Mutex](/features/mutex.md)
- [Lock](/features/lock.md)
- [Shared Memory](/features/shared-memory.md)
- [Race Condition](/features/race-condition.md)
- [Parallel](/features/parallel.md)
- [Actor Model](/features/actor-model.md)

