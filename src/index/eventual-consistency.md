# Eventual Consistency
Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made.

It is a weaker guarantee than strong consistency, where all nodes see the same data at the same time, or ACID transactions, which guarantee immediate, atomic consistency. Eventual consistency trades immediate correctness for higher availability and partition tolerance: the AP side of the CAP theorem.

In practice, eventual consistency means a write to one node may not be immediately visible on another. A user updating their profile may see the old value for a few hundred milliseconds while the change propagates to read replicas.

In applications, eventual consistency arises when using: read replicas which write to primary and read from replica, caches which serve stale data after a write, event sourcing where projections lag behind the event store, or microservices communicating via events rather than synchronous API calls.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eventual-consistency.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eventual-consistency.html","name":"Eventual Consistency","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 11:59:44 +0000","dateModified":"Sun, 09 Aug 2026 11:59:44 +0000","description":"Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Eventual Consistency.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"eventual-consistency"}]}]}</script>
```php
<?php

    // Common PHP scenario: write to primary, read from read replica
    // The replica may lag by milliseconds — eventual consistency
    
    $primary = new PDO($primaryDsn);
    $replica = new PDO($replicaDsn);
    
    $primary->exec('UPDATE users SET name = \'Alice\' WHERE id = 1');
    
    // Reading immediately from the replica may return the old name
    $row = $replica->query('SELECT name FROM users WHERE id = 1')->fetch();
    // $row['name'] could still be 'Bob' for a brief window
    
    // Mitigation: read-your-own-writes — read from primary just after a write
    // or use a sticky session to route reads to the same node for a period

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Eventual_consistency)**
## See Also

+ [Wikipedia: CAP theorem](https://en.wikipedia.org/wiki/CAP_theorem)
+ [Werner Vogels: Eventually Consistent](https://www.allthingsdistributed.com/2008/12/eventually_consistent.html)
+ [PDO in PHP](https://www.php.net/manual/en/book.pdo.php)

## Related

+ [Consistency](consistency.html)
+ [ACID](acid.html)
+ [Distributed Systems](distributed-systems.html)
+ [Event Sourcing](event-sourcing.html)
+ [Distributed Transactions](distributed-transactions.html)
+ [Cache](cache.html)
