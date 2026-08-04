# Cancellation
Cancellation is the ability to abort an ongoing asynchronous operation before it completes. In asynchronous and concurrent programming, long-running tasks such as HTTP requests, database queries, or timers may need to be stopped early to conserve resources or respond to user actions.

Cancellation is typically implemented through cancellation tokens: an object passed to an asynchronous operation that signals cancellation on demand. The operation periodically checks the token and stops if cancellation has been requested.

PHP async libraries such as Amp provide ``CancelledException`` and cancellation token support for fibers and promises.
Related : [Future](Future), [Promise](Promise), [Asynchronous](Asynchronous), [Fibers](Fibers)
