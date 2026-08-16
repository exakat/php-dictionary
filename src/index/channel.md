# Channel
A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization. A send can block until a receiver is ready, and a receive can block until a value is sent, depending on whether the channel is buffered.

CSP-style concurrency treats the channel, not the lock, as the primary coordination primitive, and languages built around it, in Go, in Clojure's core.async, with Erlang-style message passing, encourage structuring concurrent programs as independent tasks connected by channels rather than as threads sharing state.

PHP has no native channel type. Concurrency primitives such as ``Fiber`` provide cooperative multitasking within a single thread, but communication between fibers or between processes must be built from lower-level tools: a ``SplQueue``, a message queue extension, shared memory, or a userland library; none of these are integrated into the language as a first-class, typed, blocking channel the way Go's ``chan`` is.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/channel.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/channel.html","name":"Channel","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:47:26 +0000","dateModified":"Wed, 05 Aug 2026 08:47:26 +0000","description":"A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's chan and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Channel.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"channel"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Communicating_sequential_processes)**
## See Also

+ [parallel\Channel](https://www.php.net/manual/en/class.parallel-channel.php)
+ [Swoole Channel](https://wiki.swoole.com/en/#/coroutine/channel)
+ [Amp\Sync\Channel](https://amphp.org/sync)

## Related

+ [Fibers](fibers.html)
+ [Coroutine](coroutine.html)
+ [Queue](queue.html)
+ [Thread](thread.html)
+ [Shared Memory](shared-memory.html)
+ [Async](async.html)
