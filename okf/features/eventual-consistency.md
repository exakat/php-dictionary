---
type: "concept"
title: "Eventual Consistency"
description: "Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made."
resource: "https://en.wikipedia.org/wiki/Eventual_consistency"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Eventual Consistency

Eventual consistency is a data consistency model used in distributed systems where replicas of the same data are allowed to diverge temporarily, but are guaranteed to converge to the same value if no new updates are made.

It is a weaker guarantee than strong consistency, where all nodes see the same data at the same time, or ACID transactions, which guarantee immediate, atomic consistency. Eventual consistency trades immediate correctness for higher availability and partition tolerance: the AP side of the CAP theorem.

In practice, eventual consistency means a write to one node may not be immediately visible on another. A user updating their profile may see the old value for a few hundred milliseconds while the change propagates to read replicas.

In applications, eventual consistency arises when using: read replicas which write to primary and read from replica, caches which serve stale data after a write, event sourcing where projections lag behind the event store, or microservices communicating via events rather than synchronous API calls.

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

## Documentation
- [https://en.wikipedia.org/wiki/Eventual_consistency](https://en.wikipedia.org/wiki/Eventual_consistency)

## See Also
- [CAP theorem](https://en.wikipedia.org/wiki/CAP_theorem)
- [Werner Vogels: Eventually Consistent](https://www.allthingsdistributed.com/2008/12/eventually_consistent.html)
- [PDO in PHP](https://www.php.net/manual/en/book.pdo.php)

## Related
- [Consistency](/features/consistency.md)
- [ACID](/features/acid.md)
- [Distributed Systems](/features/distributed-systems.md)
- [Event Sourcing](/features/event-sourcing.md)
- [Distributed Transactions](/features/distributed-transactions.md)
- [Cache](/features/cache.md)

