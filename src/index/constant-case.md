# Constant Case
Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:

+ All the letters are set to upper case
+ Each word is separated from the other by an underscore

Constant case is used for constants, both global and class. It is not used for magic constants, which are case insensitive.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant-case.html","name":"Constant Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:25:04 +0000","dateModified":"Mon, 20 Jul 2026 08:25:04 +0000","description":"Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Constant Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Pascal Case](pascal-case.ini.html)
+ [Camel Case](camel-case.ini.html)
+ [Snake Case](snake-case.ini.html)
+ [Magic Constants](magic-constant.ini.html)
+ [Static Constant](class-constant.ini.html)
+ [Constants](constant.ini.html)
+ [Underscore](underscore.ini.html)
