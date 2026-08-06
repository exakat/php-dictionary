# Command Query Responsibility Segregation (CQRS)
CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models. It was popularized by Greg Young, building on Bertrand Meyer's Command-Query Separation principle.

Read and write workloads often have very different performance and scaling needs, so treating them as a single unified model creates unnecessary friction. By separating them, it is possible to optimize each side independently: for example, using denormalized read models or dedicated indexed projections on the query side without affecting your write logic.

It also simplifies complex domain logic. Commands encapsulate intent and business rules cleanly, without being cluttered by the concerns of how data is presented or fetched. This makes the write side easier to test and reason about.

CQRS pairs especially naturally with Event Sourcing, where state changes are stored as a sequence of events rather than overwriting rows: but it's worth noting that Event Sourcing is not necessary to benefit from CQRS. The two are complementary, not dependent on each other.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cqrs.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cqrs.html","name":"Command Query Responsibility Segregation (CQRS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"CQRS is an architectural pattern that separates read operations, Queries from write operations, Commands, into distinct models","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Command Query Responsibility Segregation (CQRS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://martinfowler.com/bliki/CQRS.html)**
## Related

+ [Event Sourcing](event-sourcing.ini.html)
+ [Command](command.ini.html)
+ [Event Storming](event-storming.ini.html)
+ [Message Bus](message-bus.ini.html)

## Related packages

+ [ecotone/ecotone](https://packagist.org/packages/ecotone/ecotone)
+ [backslashphp/backslash](https://packagist.org/packages/backslashphp/backslash)
+ [nontre/cqrs](https://packagist.org/packages/nontre/cqrs)
