---
type: "concept"
title: "Channel"
description: "A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization."
resource: "https://en.wikipedia.org/wiki/Communicating_sequential_processes"
tags: ["concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Channel

A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization. A send can block until a receiver is ready, and a receive can block until a value is sent, depending on whether the channel is buffered.

CSP-style concurrency treats the channel, not the lock, as the primary coordination primitive, and languages built around it, in Go, in Clojure's core.async, with Erlang-style message passing, encourage structuring concurrent programs as independent tasks connected by channels rather than as threads sharing state.

PHP has no native channel type. Concurrency primitives such as ``Fiber`` provide cooperative multitasking within a single thread, but communication between fibers or between processes must be built from lower-level tools: a ``SplQueue``, a message queue extension, shared memory, or a userland library; none of these are integrated into the language as a first-class, typed, blocking channel the way Go's ``chan`` is.

## Documentation
- [https://en.wikipedia.org/wiki/Communicating_sequential_processes](https://en.wikipedia.org/wiki/Communicating_sequential_processes)

## See Also
- [parallel\Channel](https://www.php.net/manual/en/class.parallel-channel.php)
- [Swoole Channel](https://wiki.swoole.com/en/#/coroutine/channel)
- [Amp\Sync\Channel](https://amphp.org/sync)

## Related
- [Fibers](/features/fibers.md)
- [Coroutine](/features/coroutine.md)
- [Queue](/features/queue.md)
- [Thread](/features/thread.md)
- [Shared Memory](/features/shared-memory.md)
- [Async](/features/async.md)

