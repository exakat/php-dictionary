# Command Query Responsibility Segregation (CQRS)
CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models. It was popularized by Greg Young, building on Bertrand Meyer's Command-Query Separation principle.

Read and write workloads often have very different performance and scaling needs, so treating them as a single unified model creates unnecessary friction. By separating them, it is possible to optimize each side independently: for example, using denormalized read models or dedicated indexed projections on the query side without affecting your write logic.

It also simplifies complex domain logic. Commands encapsulate intent and business rules cleanly, without being cluttered by the concerns of how data is presented or fetched. This makes the write side easier to test and reason about.

CQRS pairs especially naturally with Event Sourcing, where state changes are stored as a sequence of events rather than overwriting rows: but it's worth noting that Event Sourcing is not necessary to benefit from CQRS. The two are complementary, not dependent on each other.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cqrs.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cqrs.html","name":"Command Query Responsibility Segregation (CQRS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Command Query Responsibility Segregation (CQRS).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cqrs"}]}]}</script>
**[Documentation](https://martinfowler.com/bliki/CQRS.html)**
## Related

+ [Event Sourcing](event-sourcing.html)
+ [Command](command.html)
+ [Event Storming](event-storming.html)
+ [Message Bus](message-bus.html)

## Related packages

+ [ecotone/ecotone](https://packagist.org/packages/ecotone/ecotone)
+ [backslashphp/backslash](https://packagist.org/packages/backslashphp/backslash)
+ [nontre/cqrs](https://packagist.org/packages/nontre/cqrs)
