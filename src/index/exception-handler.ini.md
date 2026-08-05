# Exception Handler
The exception handler is a default or custom function, which is called once an exception has exhausted all available ``try-catch`` blocks.

The execution stops once the handler has been called: as such, it is possible to log or display information related to debugging. 

The exception handler is different from the try/catch block: the latter allows the execution to carry on, when the exception is processed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/exception-handler.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/exception-handler.ini.html","name":"Exception Handler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 05:44:37 +0000","dateModified":"Wed, 24 Jun 2026 05:44:37 +0000","description":"The exception handler is a default or custom function, which is called once an exception has exhausted all available ``try-catch`` blocks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Exception Handler.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function exception_handler(Throwable $exception) {
        echo "Uncaught exception: " , $exception->getMessage(), "\n";
    }
    
    set_exception_handler('exception_handler');
    
    throw new Exception('Uncaught Exception');
    echo "Not Executed\n";

?>
```

**[Documentation](https://www.php.net/manual/en/function.set-exception-handler.php)**
## Related

+ [Try-catch](try-catch.ini.html)
+ [PHP Handlers](handler.ini.html)
+ [Error Handler](error-handler.ini.html)
