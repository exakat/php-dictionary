---
type: "PHP Feature"
title: "Hash Table Attack"
description: "A hash table attack, also known as HashDoS or hash-flooding attack, is a denial of service technique that exploits the worst-case behavior of a hash table."
resource: "https://en.wikipedia.org/wiki/Collision_attack"
tags: ["security", "attack"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Hash Table Attack

A hash table attack, also known as HashDoS or hash-flooding attack, is a denial of service technique that exploits the worst-case behavior of a hash table. When many keys are crafted to collide on the same bucket, insertions degrade from the expected average ``O(1)`` to ``O(n)`` per operation, turning a cheap request into a CPU-bound one that can stall the whole server with a small amount of traffic.

The attack was disclosed in 2011 as a cross-language vulnerability: PHP, and most other web platforms of the time, parsed incoming POST data into an array keyed by parameter name, using a hash function with a fixed, predictable seed. An attacker could precompute thousands of string keys that all hash to the same bucket, and submit them as a single request body, forcing the engine to spend seconds or minutes rebuilding that one array.

PHP mitigated the attack on two fronts: the Zend Engine's ``HashTable`` now randomizes its hash seed per process, so collisions can no longer be precomputed offline, and the ``max_input_vars`` ini directive caps the number of input variables accepted in a single request, bounding the damage even if collisions occur.

```php
<?php

    // A crafted request body with thousands of colliding keys
    // forces PHP to rebuild $_POST's underlying hash table repeatedly,
    // each insertion degrading toward O(n) instead of O(1).
    // max_input_vars limits how many such keys are accepted at all.

    foreach ($_POST as $key => $value) {
        // even an empty loop body pays the cost of building $_POST
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Collision_attack](https://en.wikipedia.org/wiki/Collision_attack)

## See Also
- [max_input_vars](https://www.php.net/manual/en/info.configuration.php#ini.max-input-vars)
- [Principles of PHP hash table collision attacks](https://topic.alibabacloud.com/a/principles-of-php-hash-table-collision-attacks_3_75_32814723.html)

## Related
- [Hash Table](/features/hash-table.md)
- [hash() Function](/features/hash-function.md)
- [Hashing](/features/hashing.md)
- [Collision](/features/collision.md)
- [Rainbow Table](/features/rainbow-table.md)
- [Distributed Denial Of Service (DDOS)](/features/ddos.md)
- [Attack](/features/attack.md)
- [max_input_vars](/features/max_input_vars.md)
- [Vulnerability](/features/vulnerability.md)
- [Regexploit](/features/regexploit.md)
- [Timing Attack](/features/timing-attack.md)

