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

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html","name":"Scope Resolution Operator ::","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The Scope Resolution Operator :: is a token that allows access to static, constant, and overridden properties or methods of a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html"]}],"alternateName":["double-colon","class-name-resolution","paamayim-nekudotayim"],"keywords":["feature","operator","surprise","folklore"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-nullsafe-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullsafe-object-operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.paamayim-nekudotayim.php"},{"@type":"CreativeWork","name":"Scope Resolution operator in PHP","url":"https:\/\/www.geeksforgeeks.org\/php\/scope-resolution-operator-in-php\/"},{"@type":"CreativeWork","name":"Scope Resolution operator (in PHP)","url":"https:\/\/parsifar.com\/scope-resolution-operator-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"scope-resolution-operator"}]}]}</script>
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

+ [Object Operator ->](object-operator.html)
+ [Object Nullsafe Operator ?->](object-nullsafe-operator.html)
+ [Static Method](static-method.html)
+ [Static Constant](static-constant.html)
+ [Static Class](static-class.html)
+ [Static Property](static-property.html)
+ [Colon](colon.html)
+ [Double](double.html)
+ [Null Safe Object Operator](nullsafe-object-operator.html)
