# is\_object()
``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class. It is the equivalent of ``object`` type, which cannot be used with ``instanceof``; or the ``(object)`` cast, that turns a value into an object of class ``stdClass``.

``is_object()`` is rarely used, as ``instanceof`` with the expected class or interface is more precise.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_object.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_object.ini.html","name":"is_object()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/is_object().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

var_dump(is_object((object)[])); // true

$x = new stdClass();
var_dump(is_object($x)); // true

$x = 1;
var_dump(is_object($x)); // false

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-object.php)**
## Related

+ [instanceof](instanceof.ini.html)
+ [stdclass](stdclass.ini.html)
+ [is\_a()](is_a.ini.html)
