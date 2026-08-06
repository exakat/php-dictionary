# Boolean
A boolean is a value that is either ``true`` or ``false``. 

PHP's boolean are constants. They may be prefixed by ``\``, and are case-insensitive. They can't be redefined in any namespace.

There are operators to convert any data to a boolean, and operators to combine boolean together. There are also bit operators, which process integers as a field of boolean. 

Booleans have a related scalar type: ``bool``. There is also a special ``false`` type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/boolean.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/boolean.html","name":"Boolean","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A boolean is a value that is either ``true`` or ``false``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Boolean.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = True;
$b = \FALSE;

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.boolean.php)**
## See Also

+ [Understanding PHP Types – Booleans](https://dev.to/hurayraiit/understanding-php-types-booleans-256c)

## Related

+ [Type Juggling](type-juggling.ini.html)
+ [Scalar Types](scalar-type.ini.html)
+ [False](false.ini.html)
+ [Falsy](falsy.ini.html)
+ [True](true.ini.html)
+ [Truthy](truthy.ini.html)
+ [Cast Operator](cast.ini.html)
+ [Bitwise Operators](bitwise-operator.ini.html)
