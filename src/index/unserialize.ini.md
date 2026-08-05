# Unserialization
Unserialization is the extraction of an object from a string representation of an object.

The reverse process is serialization. 

There are different ways to implement serialization. The native way is to rely on the ``serialize()`` and ``unserialize()``, which, in turn, rely on the ``__serialize()`` and ``__unserialize()`` magic method. Then, ``var_export()`` and ``require()`` make another serialization method. WDDX, XML, JSON or YAML all work as serialization, yet they usually are not considered, over speed or performance issues.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unserialize.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unserialize.ini.html","name":"Unserialization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:40:35 +0000","dateModified":"Mon, 03 Aug 2026 16:40:35 +0000","description":"Unserialization is the extraction of an object from a string representation of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Unserialization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private const X = 1;
        
        function foo() {
            // same as \X::C;
            return self::C;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.serialization.php)**
## See Also

+ [Benchmarking serialization](https://peakd.com/hive-168588/@crell/benchmarking-serialization)
+ [The Dangers of PHP’s unserialize and How to stay safe](https://heera.it/the-dangers-of-phps-unserialize-and-how-to-stay-safe)
+ [unserialize.com](https://www.unserialize.com)

## Related

+ [\_\_serialize() Method](__serialize.ini.html)
+ [\_\_unserialize() Method](__unserialize.ini.html)
+ [Insecure Deserialization](insecure-deserialization.ini.html)

## Related packages

+ [xkerman/restricted-unserialize](https://packagist.org/packages/xkerman/restricted-unserialize)
