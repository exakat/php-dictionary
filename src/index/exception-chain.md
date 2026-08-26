# Chaining Exceptions
Exception chaining is the act of re-throwing a caught exception, with a new type, and with a reference to the previous exception.

To provide the previous exception to a new exception, use the third parameter of the ``Exception`` constructor. Also, always provide a third argument to custom exceptions.

The previous exception is available with the ``Exception::getPrevious()`` method of the ``Exception`` class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-chain.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-chain.html","name":"Chaining Exceptions","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:41:10 +0000","dateModified":"Mon, 24 Aug 2026 07:41:10 +0000","description":"Exception chaining is the act of re-throwing a caught exception, with a new type, and with a reference to the previous exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-chain.html"]}],"alternateName":["chaining-exception"],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/try-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Exception_chaining"},{"@type":"CreativeWork","name":"Best practices for PHP exception handling","url":"https:\/\/moxio.com\/blog\/best-practices-for-php-exception-handling\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exception-chain"}]}]}</script>
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
