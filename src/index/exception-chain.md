# Chaining Exceptions
Chaining exception is throwing again a caught exception, with a new type, and with the previous exception. 

To provide the previous exception to a new exception, use the third parameter of the ``Exception`` constructor. Also, always provide a third argument to custom exceptions.

The previous exception is available with the ``Exception::getPrevious()`` method of the ``Exception`` class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-chain.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-chain.html","name":"Chaining Exceptions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Chaining exception is throwing again a caught exception, with a new type, and with the previous exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Chaining Exceptions.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exception-chain"}]}]}</script>
```php
<?php

class myException extends \Exception {
    function __construct(string $message, $code, \Throwable $exception) {
        parent::__construct($message, $code, $exception);
    }
}

try {
    doSomething();
} catch(\Exception $e) {
    // chaining exception
    throw new myException('doSomething failed', 0, $e);
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Exception_chaining)**
## See Also

+ [Best practices for PHP exception handling](https://moxio.com/blog/best-practices-for-php-exception-handling/)

## Related

+ [throw](throw.html)
+ [Try-catch](try-catch.html)
+ [Exception](exception.html)
+ [Chaining](chaining.html)
