# Reflector
``Reflector`` is the base interface that all PHP Reflection classes implement. It declares ``__toString()``, providing a common type for all reflection objects.

All reflection classes, ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionFunction``, ``ReflectionProperty``, ``ReflectionParameter``, etc., implement this interface, allowing code to accept any reflector generically.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reflector.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reflector.ini.html","name":"Reflector","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``Reflector`` is the base interface that all PHP Reflection classes implement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Reflector.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Reflection](reflection.ini.html)
+ [Interface](interface.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [Introspection](introspection.ini.html)
+ [SplSubject](splsubject.ini.html)
