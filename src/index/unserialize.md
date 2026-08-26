# Unserialization
Unserialization is the extraction of an object from a string representation of an object.

The reverse process is serialization. 

There are different ways to implement serialization. The native way is to rely on the ``serialize()`` and ``unserialize()``, which, in turn, rely on the ``__serialize()`` and ``__unserialize()`` magic method. Then, ``var_export()`` and ``require()`` make another serialization method. WDDX, XML, JSON or YAML all work as serialization, yet they usually are not considered, over speed or performance issues.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unserialize.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unserialize.html","name":"Unserialization","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:40:35 +0000","dateModified":"Mon, 03 Aug 2026 16:40:35 +0000","description":"Unserialization is the extraction of an object from a string representation of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unserialize.html"]}],"alternateName":["unserialization","deserialize"],"keywords":["dataformat"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__serialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insecure-deserialization.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.serialization.php"},{"@type":"CreativeWork","name":"Benchmarking serialization","url":"https:\/\/peakd.com\/hive-168588\/@crell\/benchmarking-serialization"},{"@type":"CreativeWork","name":"The Dangers of PHP\u2019s unserialize and How to stay safe","url":"https:\/\/heera.it\/the-dangers-of-phps-unserialize-and-how-to-stay-safe"},{"@type":"CreativeWork","name":"unserialize.com","url":"https:\/\/www.unserialize.com"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unserialize"}]}]}</script>
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

+ [\_\_serialize() Method](__serialize.html)
+ [\_\_unserialize() Method](__unserialize.html)
+ [Insecure Deserialization](insecure-deserialization.html)

## Related packages

+ [xkerman/restricted-unserialize](https://packagist.org/packages/xkerman/restricted-unserialize)
