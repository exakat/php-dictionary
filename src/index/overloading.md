# Overloading
Overloading provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types. 

Property overloading is based on the magic methods ``__get``, ``__set``, ``__isset``, ``__unset``. Method overloading is based on the magic methods ``__call``, ``__callStatic``. There is no way to check if a overloaded method exist or not, unlike with properties.

Overloading does not apply to class constants.

Operator overloading is not supported. For example, it is not possible to define a ``-`` minus operator between two objects. This still exists for ``+``, which applies to integers, floats and arrays. It may also be supported by specific PHP extensions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overloading.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overloading.html","name":"Overloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:43 +0000","dateModified":"Fri, 07 Aug 2026 09:44:43 +0000","description":"Overloading provides means to dynamically create properties and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Overloading.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"overloading"}]}]}</script>
```php
<?php

class X {
    function foo() {
        echo __METHOD__;
    }
    
    function __call($name, $args) {
        echo self::class. '::'. $name;
    }
}

$x = new X;
$x->foo(); // x::foo
$x->goo(); // x::goo

// existence check
var_dump(method_exists(x::class, 'foo'));    // true
var_dump(method_exists(x::class, 'goo'));    // false
var_dump(method_exists(x::class, '__call')); // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.overloading.php)**
## See Also

+ [PHP: Magic Methods - Manual](https://www.php.net/manual/en/language.oop5.magic.php)
+ [Overloading in PHP](https://phppot.com/php/overloading-in-php/)

## Related

+ [Magic Methods](magic-method.html)
+ [Dynamic Method](dynamic-method.html)
+ [Method Resolution Order (MRO)](mro.html)
