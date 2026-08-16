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

Registering a handler replaces the engine's built-in behavior for that event with user-defined code, until the script ends or the handler is explicitly restored, for example with ``restore_error_handler()``. This makes handlers a powerful hook for cross-cutting concerns such as centralized logging, custom error reporting, graceful cleanup on shutdown, or lazy class loading via ``spl_autoload_register(bbe)``.

Because a handler runs in place of PHP's default behavior, a poorly written one can mask real problems: an error handler that swallows all errors without logging them, for instance, makes debugging much harder. Most handler-registering functions also accept an array to allow multiple handlers to be chained, or return the previously registered handler so it can be restored later.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handler.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handler.html","name":"PHP Handlers","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP handlers are methods which are called to customize the processing of specific events","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Handlers.html"]}],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http-header.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown-handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system-event.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl_signal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/set_error_handler.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.set-error-handler.php"},{"@type":"CreativeWork","name":"register_shutdown_function","url":"https:\/\/www.php.net\/manual\/en\/function.register-shutdown-function.php"},{"@type":"CreativeWork","name":"spl_autoload_register","url":"https:\/\/www.php.net\/manual\/en\/function.spl-autoload-register.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"handler"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/function.set-error-handler.php)**
## See Also

+ [register_shutdown_function](https://www.php.net/manual/en/function.register-shutdown-function.php)
+ [spl_autoload_register](https://www.php.net/manual/en/function.spl-autoload-register.php)

## Related

+ [HTTP Headers](http-header.html)
+ [Error Handler](error-handler.html)
+ [Exception Handler](exception-handler.html)
+ [Process Control (pcntl)](pcntl.html)
+ [Shutdown Function](shutdown-function.html)
+ [Shutdown Function](shutdown-handler.html)
+ [System Event](system-event.html)
+ [pcntl\_signal()](pcntl_signal.html)
+ [set\_error\_handler()](set_error_handler.html)
