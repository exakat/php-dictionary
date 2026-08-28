# Reflector
``Reflector`` is the base interface that all PHP Reflection classes implement. It declares ``__toString()``, providing a common type for all reflection objects.

All reflection classes, ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionFunction``, ``ReflectionProperty``, ``ReflectionParameter``, etc., implement this interface, allowing code to accept any reflector generically.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflector.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflector.html","name":"Reflector","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Reflector is the base interface that all PHP Reflection classes implement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflector.html"]}],"keywords":["reflection","interface"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/introspection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.reflector.php"},{"@type":"CreativeWork","name":"ReflectionClass Class","url":"https:\/\/www.php.net\/manual\/en\/class.reflectionclass.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reflector"}]}]}</script>
```php
<?php

    function describeReflector(Reflector $r): void {
        echo (string) $r . PHP_EOL;
    }
    
    describeReflector(new ReflectionClass(DateTime::class));
    describeReflector(new ReflectionFunction('array_map'));

?>
```

**[Documentation](https://www.php.net/manual/en/class.reflector.php)**
## See Also

+ [ReflectionClass Class](https://www.php.net/manual/en/class.reflectionclass.php)

## Related

+ [Reflection](reflection.html)
+ [Interface](interface.html)
+ [PHP Native Interfaces](php-interface.html)
+ [Introspection](introspection.html)
+ [SplSubject](splsubject.html)
