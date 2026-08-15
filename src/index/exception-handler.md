# Exception Handler
The exception handler is a default or custom function, which is called once an exception has exhausted all available ``try-catch`` blocks.

The execution stops once the handler has been called: as such, it is possible to log or display information related to debugging. 

The exception handler is different from the try/catch block: the latter allows the execution to carry on, when the exception is processed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html","name":"Exception Handler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 12:06:07 +0000","dateModified":"Sun, 09 Aug 2026 12:06:07 +0000","description":"The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Exception Handler.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exception-handler"}]}]}</script>
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
## See Also

+ [Exceptions](https://www.php.net/manual/en/language.exceptions.php)
+ [Throwable interface](https://www.php.net/manual/en/class.throwable.php)

## Related

+ [Try-catch](try-catch.html)
+ [PHP Handlers](handler.html)
+ [Error Handler](error-handler.html)
