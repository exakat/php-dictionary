# Exception Handler
The exception handler is a default or custom function, which is called once an exception has exhausted all available ``try-catch`` blocks.

The execution stops once the handler has been called: as such, it is possible to log or display information related to debugging. 

The exception handler is different from the try/catch block: the latter allows the execution to carry on, when the exception is processed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html","name":"Exception Handler","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 12:06:07 +0000","dateModified":"Sun, 09 Aug 2026 12:06:07 +0000","description":"The exception handler is a default or custom function, which is called once an exception has exhausted all available try-catch blocks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-handler.html"]}],"keywords":["exception","handler","error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-handler.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.set-exception-handler.php"},{"@type":"CreativeWork","name":"Exceptions","url":"https:\/\/www.php.net\/manual\/en\/language.exceptions.php"},{"@type":"CreativeWork","name":"Throwable interface","url":"https:\/\/www.php.net\/manual\/en\/class.throwable.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exception-handler"}]}]}</script>
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
