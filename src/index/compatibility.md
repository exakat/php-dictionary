# Compatibility
Compatibility refers to the ability of two or more things to work together without conflicts or issues. 

Compatibility may refer to:

+ Version compatibility, when code works in both versions
+ System compatibility, when code works on different operating systems
+ Method compatibility, when methods are compatible in the parent and the child class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compatibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compatibility.html","name":"Compatibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:07:49 +0000","dateModified":"Tue, 16 Jun 2026 15:07:49 +0000","description":"Compatibility refers to the ability of two or more things to work together without conflicts or issues","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Compatibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        function foo(int $i) {}
    }
    
    class Y extends X {
        // The type must be compatible with the one of the parent
        // The name does not have to be the same as in the parent
        function foo(int|null $b) {}
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Compatibility)**
## Related

+ [Method Compatibility](method-compatibility.ini.html)
+ [Interoperability](interoperability.ini.html)
+ [Migration](migration.ini.html)
