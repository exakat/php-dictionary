# Class Operator
Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier. It returns the fully qualified name of the class, according to the current code. 

``::class`` is affected by ``use`` expressions, but not by ``class_alias()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-operator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-operator.ini.html","name":"Class Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// class operator in action
// This is an unknown class, so it displays A\B
echo A\B::class;

// This is an 'use' class, so it displays A\B
use A\B as D;
echo D::class;

// class_alias creates a new class, so it is different. 
class E{}
class_alias('E', 'F');
echo F::class;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class)**
## Related

+ [Use](use.ini.html)
