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
Related : [HTTP Headers](HTTP Headers), [Error Handler](Error Handler), [Exception Handler](Exception Handler), [Process Control (pcntl)](Process Control (pcntl)), [Shutdown Function](Shutdown Function), [Shutdown Function](Shutdown Function), [System Event](System Event), [pcntl_signal()](pcntl_signal()), [set_error_handler()](set_error_handler())
