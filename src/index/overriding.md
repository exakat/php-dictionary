# Overriding
Overriding is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class.

Child classes may override constant values, properties and methods. 

When overriding, visibility cannot be reduced. A ``protected`` method or constant may become ``public``, but not ``private``. A constant

The ``#[Override]`` attribute is a helper tool to ensure that a child method overrides a parent method. It is the complement of the ``abstract`` keyword.

Incompatible overriding is not always detected at linting time: this happens when the overriding definition is parsed before the overridden definition.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overriding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overriding.html","name":"Overriding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Overriding is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Overriding.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"overriding"}]}]}</script>
```php
<?php

class MyParentClass {
    function foo() {}
}

class MyChildClass {
    function foo() {}
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.overloading.php)**
## See Also

+ [Function overloading and Overriding in PHP](https://www.geeksforgeeks.org/php/function-overloading-and-overriding-in-php/)

## Related

+ [Override Attribute](override.html)
+ [Abstract Keyword](abstract.html)
+ [Overwrite](overwrite.html)
+ [PHP Native Attributes](php-attribute.html)
+ [PHP Native Attribute](php-native-attribute.html)
