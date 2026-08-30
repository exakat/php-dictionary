---
type: "concept"
title: "Shared-Nothing Architecture"
description: "A shared-nothing architecture is a design where each unit of work, a request, a process, a node, owns all the state it needs and shares none of it with any other unit."
resource: "https://en.wikipedia.org/wiki/Shared-nothing_architecture"
tags: ["architecture", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Shared-Nothing Architecture

A shared-nothing architecture is a design where each unit of work, a request, a process, a node, owns all the state it needs and shares none of it with any other unit. Nothing survives between units and nothing is mutated by more than one of them at a time.

Traditional PHP is shared-nothing by default: each HTTP request runs in its own process or thread, starts from a clean state, and ends in oblivion once the response is sent. This gives PHP several properties for free, without any framework or operational discipline needed to obtain them elsewhere: fault isolation, since a fatal error in one request cannot corrupt the state of another; horizontal scaling, since adding a worker or a server does not require coordinating shared state; and simple memory management, since a leak or an accumulation of state cannot outlive the request. ``PHP-FPM``'s pool of worker processes is the standard implementation of this model.

The trade-off is that anything meant to persist or be shared, a session, a cache, a queue, has to be pushed out to an external store, and any workload that legitimately wants to hold state across many operations, a long-running queue worker, a WebSocket server, a job that calls several APIs concurrently, sits outside what the shared-nothing model was built for and needs its own answer, such as coroutines or an external message queue.

## Documentation
- [https://en.wikipedia.org/wiki/Shared-nothing_architecture](https://en.wikipedia.org/wiki/Shared-nothing_architecture)

## See Also
- [FastCGI Process Manager (FPM)](https://www.php.net/manual/en/install.fpm.php)

## Related
- [Stateless](/features/stateless.md)
- [Fault Isolation](/features/fault-isolation.md)
- [Horizontal Scaling](/features/horizontal-scaling.md)
- [Request-Response](/features/request-response.md)
- [FastCGI Process Manager (FPM)](/features/fpm.md)
- [Process](/features/process.md)
- [Scaling](/features/scaling.md)
- [Microservice](/features/microservice.md)
- [Distributed Systems](/features/distributed-systems.md)

