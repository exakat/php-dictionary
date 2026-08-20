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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/software-transactional-memory.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/software-transactional-memory.html","name":"Software Transactional Memory (STM)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:03:53 +0000","dateModified":"Sun, 02 Aug 2026 06:03:53 +0000","description":"Software Transactional Memory, or STM, introduced by Shavit and Touitou in 1995, is a concurrency control mechanism that borrows the transactional semantics from databases and applies them to in-memory operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Software Transactional Memory (STM).html"]}],"alternateName":["stm"],"keywords":["concurrency"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/atomic-operation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transaction.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parallel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Software_transactional_memory"},{"@type":"CreativeWork","name":"parallel extension","url":"https:\/\/www.php.net\/manual\/en\/book.parallel.php"},{"@type":"CreativeWork","name":"Swoole Table","url":"https:\/\/wiki.swoole.com\/en\/#\/memory\/table"},{"@type":"CreativeWork","name":"Composable Memory Transactions (Haskell STM paper)","url":"https:\/\/research.microsoft.com\/en-us\/um\/people\/simonpj\/papers\/stm\/stm.pdf"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"software-transactional-memory"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Software_transactional_memory)**
## See Also

+ [parallel extension](https://www.php.net/manual/en/book.parallel.php)
+ [Swoole Table](https://wiki.swoole.com/en/#/memory/table)
+ [Composable Memory Transactions (Haskell STM paper)](https://research.microsoft.com/en-us/um/people/simonpj/papers/stm/stm.pdf)

## Related

+ [Concurrency](concurrency.html)
+ [Atomic Operation](atomic-operation.html)
+ [Transaction](transaction.html)
+ [Mutex](mutex.html)
+ [Lock](lock.html)
+ [Shared Memory](shared-memory.html)
+ [Race Condition](race-condition.html)
+ [Parallel](parallel.html)
+ [Actor Model](actor-model.html)
