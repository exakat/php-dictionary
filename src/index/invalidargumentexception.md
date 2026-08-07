# InvalidArgumentException
``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type. It is a ``LogicException``, and it may be thrown when using SPL classes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invalidargumentexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invalidargumentexception.html","name":"InvalidArgumentException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:45:53 +0000","dateModified":"Mon, 03 Aug 2026 16:45:53 +0000","description":"``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/InvalidArgumentException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"InvalidArgumentException"}]}]}</script>
```php
<?php

    function foo(string $a) {}
    
    // OK
    foo("abc");
    
    // KO : invalid argument
    foo(12);

?>
```

**[Documentation](https://www.php.net/manual/en/class.invalidargumentexception.php)**
## See Also

+ [How to Handle InvalidArgument Exception in PHP](https://rollbar.com/blog/php-invalidargumentexception/)

## Related

+ [LogicException](logicexception.html)
