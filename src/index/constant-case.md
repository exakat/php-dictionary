# Constant Case
Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:

+ All the letters are set to upper case
+ Each word is separated from the other by an underscore

Constant case is used for constants, both global and class. It is not used for magic constants, which are case insensitive.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html","name":"Constant Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:25:04 +0000","dateModified":"Mon, 20 Jul 2026 08:25:04 +0000","description":"Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Constant Case.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constant-case"}]}]}</script>
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
