# Shared Database
The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema.

In a monolithic application, a shared database is natural and appropriate. In a microservices architecture, it is an anti-pattern: it creates tight coupling between services at the data layer. A schema change, such as renaming a column, changing a data type, splitting a table, in one service can silently break another, even with no API change. Services cannot be deployed or scaled independently when they share schema.

The alternative is the database-per-service pattern: each service owns its data exclusively, and other services access it only through the service's API or via events. This decouples the services at the data level, enabling independent schema evolution.

The shared database pattern is sometimes intentionally used during a monolith-to-microservices migration as a transitional step, but should be eliminated progressively.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-database.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-database.html","name":"Shared Database","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:40:36 +0000","dateModified":"Thu, 13 Aug 2026 05:40:36 +0000","description":"The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-database.html"]}],"alternateName":["shared-database-anti-pattern","shared-database-integration"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-monolith.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coupling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ddd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/microservices.io\/patterns\/data\/shared-database.html"},{"@type":"CreativeWork","name":"Is a Shared Database in Microservices Actually an Anti-pattern?","url":"https:\/\/hackernoon.com\/is-shared-database-in-microservices-actually-anti-pattern-8cc2536adfe4"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shared-database"}]}]}</script>
```php
<?php

    // Anti-pattern: two services query the same 'orders' table directly
    
    // OrderService writes
    $pdo->exec('INSERT INTO orders (user_id, total) VALUES (1, 9900)');
    
    // ShippingService reads, tightly coupled to OrderService's schema
    $rows = $pdo->query('SELECT id, user_id, total FROM orders WHERE shipped = 0')->fetchAll();
    // A rename of 'total' to 'amount' in OrderService silently breaks ShippingService.
    
    // Correct approach: ShippingService calls the OrderService API or subscribes to events
    $orders = $httpClient->get('http://order-service/orders?shipped=false');
    // OR
    $event = new OrderPlaced($orderId, $total); // ShippingService listens for this event

?>
```

**[Documentation](https://microservices.io/patterns/data/shared-database.html)**
## See Also

+ [Is a Shared Database in Microservices Actually an Anti-pattern?](https://hackernoon.com/is-shared-database-in-microservices-actually-anti-pattern-8cc2536adfe4)

## Related

+ [Distributed Monolith](distributed-monolith.html)
+ [Microservice](microservice.html)
+ [Database](database.html)
+ [Coupling](coupling.html)
+ [Domain Design Driven (DDD)](ddd.html)
+ [Event Driven](event-driven.html)
