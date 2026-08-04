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

Related : [Consistency](Consistency), [ACID](ACID), [Distributed Systems](Distributed Systems), [Event Sourcing](Event Sourcing), [Distributed Transactions](Distributed Transactions), [Cache](Cache)
