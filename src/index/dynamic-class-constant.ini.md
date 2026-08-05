# Dynamic Class Constant
Dynamic class constant access has always been possible with a call to the ``constant()`` function. With the ``class::constant`` syntax, it is possible to reach any visible constant, or, also, enumeration cases.

A new syntax is available since version 8.3 to do the same: ``class::{$name}``. The curly braces are important in that call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-class-constant.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-class-constant.ini.html","name":"Dynamic Class Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:48 +0000","dateModified":"Fri, 19 Jun 2026 21:24:48 +0000","description":"Dynamic class constant access has always been possible with a call to the ``constant()`` function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic Class Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

enum E: string {
    case A = 'abc';
    const B = 'def';
}

$name = 'E::A';
echo constant($name)->value;
// PHP 8.3+ 
echo E::{$name}->value;

$name = 'E::B';
echo constant($name);
// PHP 8.3+ 
echo E::{$name};

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## See Also

+ [PHP 8.3: Dynamic class constant and Enum member fetch support](https://php.watch/versions/8.3/dynamic-class-const-enum-member-syntax-support)

## Related

+ [Static Constant](class-constant.ini.html)
+ [Constants](constant.ini.html)
+ [Dynamic](dynamic.ini.html)
+ [Enumeration (enum)](enum.ini.html)
+ [Functions](function.ini.html)
+ [constant()](constant-function.ini.html)
