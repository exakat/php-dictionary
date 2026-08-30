---
type: "concept"
title: "Source Of Truth"
description: "A source of truth is the one place designated to hold the authoritative version of a piece of data."
resource: "https://en.wikipedia.org/wiki/Single_source_of_truth"
tags: ["concept", "code architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Source Of Truth

A source of truth is the one place designated to hold the authoritative version of a piece of data. Every other copy of that data, whether cached, denormalized, replicated, or displayed, is derived from it and must defer to it whenever a conflict appears.

The idea shows up at every scale of a PHP application. A configuration value should live in one file or environment variable, not be duplicated across several classes that might drift apart. A database column is the source of truth for an entity's state, while a Redis cache or a computed property is only a disposable projection of it, and must be invalidated or recomputed whenever the underlying row changes. In event-sourced systems, the ``event-store`` itself is the source of truth: the current state is never trusted directly, but rebuilt on demand by replaying events.

Without a clear source of truth, systems accumulate silent inconsistencies: a cache that outlives its data, two services that each believe their own copy is authoritative, or a generated file that is manually edited and diverges from its generator. Establishing one explicitly is what makes reconciliation and debugging possible, since there is always a reference to compare against.

```php
<?php

    class UserRepository {
        // The database row is the source of truth for the user's state.
        public function getEmail(int $userId): string {
            if ($cached = $this->cache->get("user:$userId:email")) {
                return $cached; // a disposable projection, not the truth itself
            }

            $email = $this->pdo
                ->query("SELECT email FROM users WHERE id = $userId")
                ->fetchColumn();

            $this->cache->set("user:$userId:email", $email, ttl: 300);

            return $email;
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Single_source_of_truth](https://en.wikipedia.org/wiki/Single_source_of_truth)

## See Also
- [How to establish a single source of truth (SSOT)](https://www.thoughtspot.com/data-trends/best-practices/single-source-of-truth)
- [What Is a Single Source of Truth and How to Build One for Seamless Data Management](https://strapi.io/blog/what-is-single-source-of-truth)

## Related
- [Event Store](/features/event-store.md)
- [Cache](/features/cache.md)
- [Idempotent](/features/idempotent.md)
- [Don't Repeat Yourself (DRY)](/features/dry.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Temporal Replay](/features/temporal-replay.md)

