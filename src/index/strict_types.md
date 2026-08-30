# strict\_types
``strict_types`` is an execution directive, that makes PHP more strict when applying the types. In particular, it doesn't cast scalar values automatically, but raise an error. 

``strict_types`` is an option per file, and is set with the ``declare()`` function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict_types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict_types.html","name":"strict_types","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"strict_types is an execution directive, that makes PHP more strict when applying the types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict_types.html"]}],"keywords":["configuration","declare","rfc"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/declare.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__tostring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coercion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-widening.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.declarations.php#language.types.declarations.strict"},{"@type":"CreativeWork","name":"PHP strict_types","url":"https:\/\/www.phptutorial.net\/php-tutorial\/php-strict_types\/"},{"@type":"CreativeWork","name":"The way declare(strict_types=1) works in PHP","url":"https:\/\/dev.to\/rocksheep\/the-way-stricttypes-works-in-php-eb7"},{"@type":"CreativeWork","name":"What is PHP's declare(strict_types=1); and why you should use it","url":"https:\/\/backendtea.com\/post\/php-declare-strict-types\/"},{"@type":"CreativeWork","name":"PHP RFC: Unify PHP's typing modes (aka remove strict_types declare)","url":"https:\/\/github.com\/Girgias\/unify-typing-modes-rfc"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strict_types"}]}]}</script>
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

+ [Type System](type.html)
+ [declare()](declare.html)
+ [\_\_toString() Method](__tostring.html)
+ [Type Checking](type-checking.html)
+ [Type Coercion](coercion.html)
+ [Strict](strict.html)
+ [Type System](type-system.html)
+ [Type Widening](type-widening.html)
