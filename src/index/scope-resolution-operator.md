# Scope Resolution Operator ::
The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class.

Traditionally, this used to be a feature of the function ``get_class()``. The operator is more modern and faster. 

The double colon operator is used to access class related elements, such as 

+ Static properties, ``X::$property``
+ Static methods, ``X::method()``
+ Static constants, ``X::CONSTANT``
+ Class name, ``X::class``

This operator is often called double-colon, or ``paamayim-nekudotayim``: this means ``double-colon`` in Hebrew. It is said to be a lot easier to google than ``::``.

PHP also has a single colon operator ``:``, used for goto labels, ternary operator, etc. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/scope-resolution-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/scope-resolution-operator.html","name":"Scope Resolution Operator ::","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:09:01 +0000","dateModified":"Tue, 04 Aug 2026 19:09:01 +0000","description":"The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Scope Resolution Operator ::.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = new stdClass();

echo $a::class;

// identical to 
echo get_class($a);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)**
## See Also

+ [Scope Resolution operator in PHP](https://www.geeksforgeeks.org/php/scope-resolution-operator-in-php/)
+ [Scope Resolution operator (in PHP)](https://parsifar.com/scope-resolution-operator-in-php/)

## Related

+ [Object Operator ->](object-operator.ini.html)
+ [Object Nullsafe Operator ?->](object-nullsafe-operator.ini.html)
+ [Static Method](static-method.ini.html)
+ [Static Constant](static-constant.ini.html)
+ [Static Class](static-class.ini.html)
+ [Static Property](static-property.ini.html)
+ [Colon](colon.ini.html)
+ [Double](double.ini.html)
+ [Null Safe Object Operator](nullsafe-object-operator.ini.html)
