# Object Syntax
The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``.

Object syntax is often opposed to the array syntax, which relies on arrays and the square brackets ``[ ]``: it uses string index as properties and functions instead of methods.

Object syntax is also opposed to ``resource``: some PHP extensions produce resources, which are usually feed as first argument into dedicated functions. The object syntax hides the resource in an object, and makes use of method calls, with similar names and parameters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-syntax.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-syntax.ini.html","name":"Object Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Object Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$object = new Stdclass();
$object->property = 1;
echo $object->property;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.php)**
## See Also

+ [The basics](https://www.php.net/manual/en/language.oop5.basic.php)

## Related

+ [Array Syntax](array-syntax.ini.html)
+ [resource](resource.ini.html)
