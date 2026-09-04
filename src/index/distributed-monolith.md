# Distributed Monolith
A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution.

Common symptoms: shared database between services, synchronous call chains where all services must be available for any request to succeed, shared code libraries with business logic, deployment dependencies where service A must be deployed before service B, and a lack of independent scalability.

The distributed monolith combines the worst of both worlds: the operational complexity of microservices without the benefits.

The root cause is usually an attempt to split a monolith by technical layer, splitting into a ``frontend service`` and ``backend service``, rather than by business capability. True microservices require domain-driven boundaries and decentralised data management.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-monolith.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-monolith.html","name":"Distributed Monolith","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:22 +0000","dateModified":"Mon, 17 Aug 2026 09:06:22 +0000","description":"A distributed monolith is an anti-pattern where a system is deployed as multiple separate services but remains tightly coupled in practice, changes to one service still require coordinated changes to others, defeating the purpose of the distribution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-monolith.html"]}],"keywords":["concept","architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monolith.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soa.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fault-isolation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coupling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ddd.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.techtarget.com\/it-infrastructure\/tip\/The-distributed-monolith-What-it-is-and-how-to-escape-it"},{"@type":"CreativeWork","name":"Is your microservice a distributed monolith?","url":"https:\/\/www.gremlin.com\/blog\/is-your-microservice-a-distributed-monolith"},{"@type":"CreativeWork","name":"Distributed monolith architecture: What it is, why it happens, and how to fix it","url":"https:\/\/vfunction.com\/blog\/distributed-monolith-architecture\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"distributed-monolith"}]}]}</script>
```php
<?php

    // Symptom: all services share one database, tight coupling at the data layer
    // Service A writes orders; Service B reads orders directly from the same schema.
    // A schema migration in Service A breaks Service B without any API change.
    
    // Symptom: synchronous chain, no service can fail independently
    // UserService -> OrderService -> PaymentService -> InventoryService
    // If Inventory is down, the entire chain fails, same as a monolith.
    
    // Correct approach: each service owns its data and communicates via events or APIs
    // Order placed -> event published -> Inventory consumes event independently

?>
```

**[Documentation](https://www.techtarget.com/it-infrastructure/tip/The-distributed-monolith-What-it-is-and-how-to-escape-it)**
## See Also

+ [Is your microservice a distributed monolith?](https://www.gremlin.com/blog/is-your-microservice-a-distributed-monolith)
+ [Distributed monolith architecture: What it is, why it happens, and how to fix it](https://vfunction.com/blog/distributed-monolith-architecture/)

## Related

+ [Monolith](monolith.html)
+ [Microservice](microservice.html)
+ [Service-Oriented Architecture (SOA)](soa.html)
+ [Shared Database](shared-database.html)
+ [Fault Isolation](fault-isolation.html)
+ [Coupling](coupling.html)
+ [Domain Design Driven (DDD)](ddd.html)
