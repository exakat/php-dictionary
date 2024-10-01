.. _handler:

PHP Handlers
------------

PHP handlers are methods which are called to customize the processing of specific events. All those handlers have a default handler, which is used until a new one is configured.

Handlers are usually named by their setting function : 

+ Errors
    + set_error_handler()
    + set_exception_handler()
+ Sessions
    + session_set_save_handler()
    + session_register_shutdown()
+ Execution
    + register_shutdown_function()
+ Ticks
    + register_tick_function()
+ Headers
    + header_register_callback()
+ Streams
    + stream_register_wrapper()
    + stream_wrapper_register()
    + stream_filter_register()
+ Autoload
    + spl_autoload_register()

PHP handlers may be functions, closures and arrow functions. 


`Documentation <https://www.php.net/manual/en/function.set-error-handler.php>`__

Related : :ref:`HTTP Headers <http-header>`, :ref:`Error Handler <error-handler>`, :ref:`Process Control (pcntl) <pcntl>`, :ref:`Shutdown Function <shutdown-function>`, :ref:`Shutdown Function <shutdown-handler>`, :ref:`System Event <system-event>`
