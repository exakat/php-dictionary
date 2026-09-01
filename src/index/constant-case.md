# Constant Case
Constant case, also written ``CONSTANT_CASE``, is a way of writing constant names, without spaces. The rules are:

+ All the letters are set to upper case
+ Each word is separated from the other by an underscore

Constant case is used for constants, both global and class. It is not used for magic constants, which are case insensitive.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html","name":"Constant Case","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 31 Aug 2026 17:32:49 +0000","dateModified":"Mon, 31 Aug 2026 17:32:49 +0000","description":"Constant case, also written CONSTANT_CASE, is a way of writing constant names, without spaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html"]}],"keywords":["convention"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pascal-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/camel-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snake-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/stringcase.org\/cases\/snake\/"},{"@type":"CreativeWork","name":"stringcase website","url":"https:\/\/stringcase.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constant-case"}]}]}</script>
```php
<?php

    const CONSTANT_CASE = 1;
    
    class X {
        const CLASS_CONSTANT_CASE = 1;
        
        function foo() {
            echo __METHOD__;
            echo __method__; // same as above
        }
    }

?>
```

**[Documentation](https://stringcase.org/cases/snake/)**
## See Also

+ [stringcase website](https://stringcase.org/)

## Related

+ [Pascal Case](pascal-case.html)
+ [Camel Case](camel-case.html)
+ [Snake Case](snake-case.html)
+ [Magic Constants](magic-constant.html)
+ [Static Constant](class-constant.html)
+ [Constants](constant.html)
+ [Underscore](underscore.html)
