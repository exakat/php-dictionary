---
type: "concept"
title: "CAP Theorem"
description: "The CAP theorem, also known as Brewer's theorem, states that a distributed data store can provide at most two of the following three guarantees simultaneously: + Consistency: every read receives the most recent write or an error."
resource: "https://en.wikipedia.org/wiki/CAP_theorem"
tags: ["concept", "distributed"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# CAP Theorem

The CAP theorem, also known as Brewer's theorem, states that a distributed data store can provide at most two of the following three guarantees simultaneously:

+ Consistency: every read receives the most recent write or an error. All nodes see the same data at the same time.
+ Availability: every request receives a non-error response, though it may not reflect the most recent write.
+ Partition tolerance: the system continues to operate even if network messages are dropped or delayed between nodes.

Since network partitions are unavoidable in real distributed systems, the practical choice is between CP, that is consistent and partition-tolerant, e.g., HBase, ZooKeeper, and AP, that is available and partition-tolerant, e.g., Cassandra, CouchDB.

PHP applications interact with distributed stores from the client side, selecting a backend that matches their consistency or availability requirements.

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

## Documentation
- [https://en.wikipedia.org/wiki/CAP_theorem](https://en.wikipedia.org/wiki/CAP_theorem)

## See Also
- [Brewer's conjecture (original paper)](https://dl.acm.org/doi/10.1145/564585.564601)

## Related
- [Distributed Systems](/features/distributed-systems.md)
- [Eventual Consistency](/features/eventual-consistency.md)
- [Consistency](/features/consistency.md)
- [Availability](/features/availability.md)
- [ACID](/features/acid.md)
- [Nosql Database](/features/nosql-database.md)
- [Distributed Transactions](/features/distributed-transactions.md)

