# Error Handler
The PHP error handler is a method that manages errors when they arise, instead of the default PHP handler. 

The error handler is set with the ``set_error_handler()`` function. 

The error handler is convenient to translate errors, handle custom levels of errors, or convert errors to exceptions. 

There is a separate exception handler.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error-handler.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/error-handler.html","name":"Error Handler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 05:39:54 +0000","dateModified":"Wed, 24 Jun 2026 05:39:54 +0000","description":"The PHP error handler is a method that manages errors when they arise, instead of the default PHP handler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Error Handler.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    set_error_handler('customErrorHandler');
    
    function customErrorHandler($errno, $errstr, $errfile, $errline, array $errcontext)
    {
        // Handles @ error suppression
        if (error_reporting === 0)
        {
            return false;
        }
    
        throw new Exception($errstr, 0, $errno, $errfile, $errline);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.set-error-handler.php)**
## See Also

+ [Convert Errors to Exceptions in PHP](https://joshtronic.com/2013/07/15/convert-errors-to-exceptions/)
+ [Modern Error handling in PHP](https://netgen.io/blog/modern-error-handling-in-php)

## Related

+ [PHP Handlers](handler.ini.html)
+ [Exception Handler](exception-handler.ini.html)
+ [Shutdown Function](shutdown-handler.ini.html)
+ [Error Handling](error-handling.ini.html)
+ [Error Reporting](error-reporting.ini.html)
