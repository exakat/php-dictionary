# Compatibility
Compatibility refers to the ability of two or more things to work together without conflicts or issues. 

Compatibility may refer to:

+ Version compatibility, when code works in both versions
+ System compatibility, when code works on different operating systems
+ Method compatibility, when methods are compatible in the parent and the child class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compatibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compatibility.html","name":"Compatibility","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"Compatibility refers to the ability of two or more things to work together without conflicts or issues","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compatibility.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-compatibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interoperability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/migration.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Compatibility"},{"@type":"CreativeWork","name":"PHP: Migrating from PHP 8.3.x to PHP 8.4.x","url":"https:\/\/www.php.net\/manual\/en\/migration84.php"},{"@type":"CreativeWork","name":"PHP: Supported Versions","url":"https:\/\/www.php.net\/supported-versions.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"compatibility"}]}]}</script>
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
## See Also

+ [PHP: Migrating from PHP 8.3.x to PHP 8.4.x](https://www.php.net/manual/en/migration84.php)
+ [PHP: Supported Versions](https://www.php.net/supported-versions.php)

## Related

+ [Method Compatibility](method-compatibility.html)
+ [Interoperability](interoperability.html)
+ [Migration](migration.html)
