# strict\_types
``strict_types`` is an execution directive, that makes PHP more strict when applying the types. In particular, it doesn't cast scalar values automatically, but raise an error. 

``strict_types`` is an option per file, and is set with the ``declare()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strict_types.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strict_types.ini.html","name":"strict_types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:41:17 +0000","dateModified":"Mon, 13 Jul 2026 18:41:17 +0000","description":"``strict_types`` is an execution directive, that makes PHP more strict when applying the types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strict_types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    declare(strict_types=1);
    
    function foo(int $a) {}
    
    foo(1);
    foo(1.3);
    //Fatal error: Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, float given,

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict)**
## See Also

+ [PHP strict_types](https://www.phptutorial.net/php-tutorial/php-strict_types/)
+ [The way declare(strict_types=1) works in PHP](https://dev.to/rocksheep/the-way-stricttypes-works-in-php-eb7)
+ [What is PHP's declare(strict_types=1); and why you should use it](https://backendtea.com/post/php-declare-strict-types/)
+ [PHP RFC: Unify PHP's typing modes (aka remove strict_types declare)](https://github.com/Girgias/unify-typing-modes-rfc)

## Related

+ [Type System](type.ini.html)
+ [declare()](declare.ini.html)
+ [\_\_toString() Method](__tostring.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Type Coercion](coercion.ini.html)
+ [Strict](strict.ini.html)
+ [Type System](type-system.ini.html)
+ [Type Widening](type-widening.ini.html)
