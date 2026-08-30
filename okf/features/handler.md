---
type: "PHP Feature"
title: "PHP Handlers"
description: "PHP handlers are methods which are called to customize the processing of specific events."
resource: "https://www.php.net/manual/en/function.set-error-handler.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Handlers

PHP handlers are methods which are called to customize the processing of specific events. All those handlers have a default handler, which is used until a new one is configured.

Handlers are usually named by their setting function: 

+ Errors
    + ``set_error_handler()``
    + ``set_exception_handler()``
+ Sessions
    + ``session_set_save_handler()``
    + ``session_register_shutdown()``
+ Execution
    + ``register_shutdown_function()``
+ Ticks
    + ``register_tick_function()``
+ Headers
    + ``header_register_callback()``
+ Streams
    + ``stream_register_wrapper()``
    + ``stream_wrapper_register()``
    + ``stream_filter_register()``
+ Autoload
    + ``spl_autoload_register()``

PHP handlers may be functions, closures and arrow functions.

Registering a handler replaces the engine's built-in behavior for that event with user-defined code, until the script ends or the handler is explicitly restored, for example with ``restore_error_handler()``. This makes handlers a powerful hook for cross-cutting concerns such as centralized logging, custom error reporting, graceful cleanup on shutdown, or lazy class loading via ``spl_autoload_register()``.

Because a handler runs in place of PHP's default behavior, a poorly written one can mask real problems: an error handler that swallows all errors without logging them, for instance, makes debugging much harder. Most handler-registering functions also accept an array to allow multiple handlers to be chained, or return the previously registered handler so it can be restored later.

## Documentation
- [https://www.php.net/manual/en/function.set-error-handler.php](https://www.php.net/manual/en/function.set-error-handler.php)

## See Also
- [register_shutdown_function](https://www.php.net/manual/en/function.register-shutdown-function.php)
- [spl_autoload_register](https://www.php.net/manual/en/function.spl-autoload-register.php)

## Related
- [HTTP Headers](/features/http-header.md)
- [Error Handler](/features/error-handler.md)
- [Exception Handler](/features/exception-handler.md)
- [Process Control (pcntl)](/features/pcntl.md)
- [Shutdown Function](/features/shutdown-function.md)
- [System Event](/features/system-event.md)
- [pcntl_signal()](/features/pcntl_signal.md)
- [set_error_handler()](/features/set_error_handler.md)

