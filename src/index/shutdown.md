# Shutdown
Shutdown is the final phase of a PHP request lifecycle, when the engine tears down everything that was set up to run the script.

It happens when the script reaches its natural end, or when it is interrupted early with ``exit()`` or ``die()``. It also happens after an uncaught error or a fatal error, since those stop the normal execution flow.

During shutdown, PHP calls any function registered with ``register_shutdown_function()``, then destroys the remaining objects, triggering their ``__destruct()`` method. Output buffers are flushed, and resources like open files or database connections that were not explicitly closed are released by the engine.

At the engine level, shutdown is actually split in two steps: ``RSHUTDOWN``, which cleans up the current request, and ``MSHUTDOWN``, which unloads the extensions when the whole PHP process ends. Userland code, such as shutdown functions and destructors, only runs during ``RSHUTDOWN``.

Shutdown is also the only moment when a fatal error may still be detected and logged, using ``error_get_last()`` inside a registered shutdown function, since such errors bypass regular error handlers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown.html","name":"Shutdown","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Shutdown is the final phase of a PHP request lifecycle, when the engine tears down everything that was set up to run the script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Shutdown.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"shutdown"}]}]}</script>
```php
<?php

    register_shutdown_function(function () {
        $error = error_get_last();
        if ($error !== null && $error['type'] === E_ERROR) {
            error_log($error['message']);
        }
    });

    class Connection {
        function __destruct() {
            echo 'Connection closed', PHP_EOL;
        }
    }

    $db = new Connection();

?>
```

**[Documentation](https://www.php.net/manual/en/function.register-shutdown-function.php)**
## See Also

+ [Learning the PHP lifecycle](https://www.phpinternalsbook.com/php7/extensions_design/php_lifecycle.html)
+ [How to catch a fatal error in PHP](https://www.php.net/manual/en/function.error-get-last.php)

## Related

+ [Shutdown Function](shutdown-function.html)
+ [Destructor](destructor.html)
+ [Exit](exit.html)
+ [Lifecycle](lifecycle.html)
+ [Execution](execution.html)
+ [Garbage Collection](garbage-collection.html)
