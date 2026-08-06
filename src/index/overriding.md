# Overriding
Overriding is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class.

Child classes may override constant values, properties and methods. 

When overriding, visibility cannot be reduced. A ``protected`` method or constant may become ``public``, but not ``private``. A constant

The ``#[Override]`` attribute is a helper tool to ensure that a child method overrides a parent method. It is the complement of the ``abstract`` keyword.

Incompatible overriding is not always detected at linting time: this happens when the overriding definition is parsed before the overridden definition.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/overriding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/overriding.html","name":"Overriding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:19:09 +0000","dateModified":"Fri, 10 Jul 2026 09:19:09 +0000","description":"Overriding is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Overriding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Override Attribute](override.ini.html)
+ [Abstract Keyword](abstract.ini.html)
+ [Overwrite](overwrite.ini.html)
+ [PHP Native Attributes](php-attribute.ini.html)
+ [PHP Native Attribute](php-native-attribute.ini.html)
