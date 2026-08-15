# Shared-Nothing Architecture
A shared-nothing architecture is a design where each unit of work, a request, a process, a node, owns all the state it needs and shares none of it with any other unit. Nothing survives between units and nothing is mutated by more than one of them at a time.

Traditional PHP is shared-nothing by default: each HTTP request runs in its own process or thread, starts from a clean state, and ends in oblivion once the response is sent. This gives PHP several properties for free, without any framework or operational discipline needed to obtain them elsewhere: fault isolation, since a fatal error in one request cannot corrupt the state of another; horizontal scaling, since adding a worker or a server does not require coordinating shared state; and simple memory management, since a leak or an accumulation of state cannot outlive the request. PHP-FPM's pool of worker processes is the standard implementation of this model.

The trade-off is that anything meant to persist or be shared, a session, a cache, a queue, has to be pushed out to an external store, and any workload that legitimately wants to hold state across many operations, a long-running queue worker, a WebSocket server, a job that calls several APIs concurrently, sits outside what the shared-nothing model was built for and needs its own answer, such as coroutines or an external message queue.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-nothing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-nothing.html","name":"Shared-Nothing Architecture","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:14:13 +0000","dateModified":"Thu, 13 Aug 2026 06:14:13 +0000","description":"A shared-nothing architecture is a design where each unit of work, a request, a process, a node, owns all the state it needs and shares none of it with any other unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Shared-Nothing Architecture.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shared-nothing"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Shared-nothing_architecture)**
## See Also

+ [PHP-FPM](https://www.php.net/manual/en/install.fpm.php)

## Related

+ [Stateless](stateless.html)
+ [Fault Isolation](fault-isolation.html)
+ [Horizontal Scaling](horizontal-scaling.html)
+ [Request-Response](request-response.html)
+ [FastCGI Process Manager (FPM)](fpm.html)
+ [Process](process.html)
+ [Scaling](scaling.html)
+ [Microservice](microservice.html)
+ [Distributed Systems](distributed-systems.html)
