# Future
A future is a programming construct representing a value that is not yet available but will be resolved at some point. It is closely related to promises: a future is the read-only view of an asynchronous result, while a promise is the write side that resolves or rejects that future.

In languages like Java, Scala, and Dart, futures and promises are distinct objects. With languages like PHP, the distinction is often blurred, and the terms are used interchangeably within async libraries like ReactPHP or Amp.

Futures enable non-blocking code by allowing a computation to proceed without waiting for a result that is not yet ready.
Related : [Promise](Promise), [Asynchronous](Asynchronous), [Fibers](Fibers), [Cancellation](Cancellation)
