# CAP Theorem
The CAP theorem, also known as Brewer's theorem, states that a distributed data store can provide at most two of the following three guarantees simultaneously:

+ Consistency: every read receives the most recent write or an error. All nodes see the same data at the same time.
+ Availability: every request receives a non-error response, though it may not reflect the most recent write.
+ Partition tolerance: the system continues to operate even if network messages are dropped or delayed between nodes.

Since network partitions are unavoidable in real distributed systems, the practical choice is between CP, that is consistent and partition-tolerant, e.g., HBase, ZooKeeper, and AP, that is available and partition-tolerant, e.g., Cassandra, CouchDB.

PHP applications interact with distributed stores from the client side, selecting a backend that matches their consistency or availability requirements.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cap-theorem.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cap-theorem.html","name":"CAP Theorem","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:34:57 +0000","dateModified":"Thu, 16 Jul 2026 08:34:57 +0000","description":"The CAP theorem, also known as Brewer's theorem, states that a distributed data store can provide at most two of the following three guarantees simultaneously:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/CAP Theorem.html"]}],"alternateName":["cap","brewer-theorem"],"keywords":["concept","distributed"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eventual-consistency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/consistency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/availability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acid.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nosql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-transactions.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/CAP_theorem"},{"@type":"CreativeWork","name":"Brewer's conjecture (original paper)","url":"https:\/\/dl.acm.org\/doi\/10.1145\/564585.564601"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cap-theorem"}]}]}</script>
```php
<?php

    // CP: Redis with WAIT ensures synchronous replication before returning
    $redis = new Redis();
    $redis->connect('redis-primary', 6379);
    $redis->set('balance', 100);
    $redis->wait(1, 100); // wait for 1 replica, 100 ms timeout
    
    // AP: reading from a replica may return stale data
    $replica = new Redis();
    $replica->connect('redis-replica', 6379);
    $balance = $replica->get('balance'); // possibly a past value

?>
```

**[Documentation](https://en.wikipedia.org/wiki/CAP_theorem)**
## See Also

+ [Brewer's conjecture (original paper)](https://dl.acm.org/doi/10.1145/564585.564601)

## Related

+ [Distributed Systems](distributed-systems.html)
+ [Eventual Consistency](eventual-consistency.html)
+ [Consistency](consistency.html)
+ [Availability](availability.html)
+ [ACID](acid.html)
+ [Nosql Database](nosql-database.html)
+ [Distributed Transactions](distributed-transactions.html)
