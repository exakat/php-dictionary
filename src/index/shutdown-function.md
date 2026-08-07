# Shutdown Function
The shutdown function is a PHP custom function which is called when the application is shutting down. This is after a call to ``exit()``, ``die()`` or the natural end of life of the script.

Multiple functions may be registered with the ``register_shutdown_function()`` function. They will be called in order of registration.

Shutdown function acts as destructors: they should clean up any unfinished jobs, and gracefully free resources, such as closing files with their correct endings, or gracefully closing connections.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown-function.html","name":"Shutdown Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The shutdown function is a PHP custom function which is called when the application is shutting down","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Shutdown Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Shutdown Function"}]}]}</script>
```php
<?php

    // extract from the PHP manual
    function shutdown()
    {
        // This is our shutdown function, in 
        // here we can do any last operations
        // before the script is complete.
    
        echo 'Script executed with success', PHP_EOL;
    }
    
    register_shutdown_function('shutdown');

?>
```

**[Documentation](https://www.php.net/manual/en/function.register-shutdown-function.php)**
## See Also

+ [A Practical Guide to PHP's `register_shutdown_function()` Function](https://reintech.io/blog/a-practical-guide-to-php-register_shutdown_function)

## Related

+ [PHP Handlers](handler.html)
+ [Exit](exit.html)
