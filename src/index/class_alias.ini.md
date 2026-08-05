# class\_alias()
The ``class_alias()`` function creates an alias for a class, interface, enum or trait. Then, the alias may be used in place of the original name anywhere in the application, including in ``use`` expressions. 

Since version 8.3, ``class_alias()`` supports the creation of aliases with native PHP classes. 

``class_alias()`` is also usable on interfaces, enumerations and traits. 

Once created, the objects are of the original class. The alias name doesn't stick to the objects, and it is not possible to know if the object was created as an alias or the original class. The alias may be used with types.

There is no equivalent to ``class_alias()`` for functions, or constants. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class_alias.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class_alias.ini.html","name":"class_alias()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``class_alias()`` function creates an alias for a class, interface, enum or trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class_alias().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class_alias(stdClass::class, StandardClass::class);

$object = new StandardClass();

// stdClass
print gettype($object);

?>
```

**[Documentation](https://www.php.net/manual/en/function.class-alias.php)**
## See Also

+ [PHP: Using class_alias to maintain BC while moving/renaming classes](https://www.schmengler-se.de/en/2016/09/php-using-class_alias-to-maintain-bc-while-move-rename-classes/)
+ [Exploring PHP class_alias](hhttps://dev.to/khairuaqsara/exploring-php-classalias-k2n)

## Related

+ [Use](use.ini.html)
+ [Alias](alias.ini.html)
