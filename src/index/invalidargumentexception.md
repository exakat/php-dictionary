# InvalidArgumentException
``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type. It is a ``LogicException``, and it may be thrown when using SPL classes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/invalidargumentexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/invalidargumentexception.html","name":"InvalidArgumentException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:45:53 +0000","dateModified":"Mon, 03 Aug 2026 16:45:53 +0000","description":"``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/InvalidArgumentException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [LogicException](logicexception.ini.html)
