# Channel
A channel is a typed, synchronized queue used to pass values between concurrent tasks, popularized by Go's ``chan`` and modeled on Communicating Sequential Processes, CSP: rather than sharing mutable memory protected by locks, tasks communicate by sending values through a channel, and the channel itself provides the necessary synchronization. A send can block until a receiver is ready, and a receive can block until a value is sent, depending on whether the channel is buffered.

CSP-style concurrency treats the channel, not the lock, as the primary coordination primitive, and languages built around it, in Go, in Clojure's core.async, with Erlang-style message passing, encourage structuring concurrent programs as independent tasks connected by channels rather than as threads sharing state.

PHP has no native channel type. Concurrency primitives such as ``Fiber`` provide cooperative multitasking within a single thread, but communication between fibers or between processes must be built from lower-level tools: a ``SplQueue``, a message queue extension, shared memory, or a userland library; none of these are integrated into the language as a first-class, typed, blocking channel the way Go's ``chan`` is.
Related : [Fibers](Fibers), [Coroutine](Coroutine), [Queue](Queue), [Thread](Thread), [Shared Memory](Shared Memory), [Async](Async)
