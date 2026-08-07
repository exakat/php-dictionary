# is\_object()
``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class. It is the equivalent of ``object`` type, which cannot be used with ``instanceof``; or the ``(object)`` cast, that turns a value into an object of class ``stdClass``.

``is_object()`` is rarely used, as ``instanceof`` with the expected class or interface is more precise.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html","name":"is_object()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"is_object()"}]}]}</script>
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

+ [instanceof](instanceof.html)
+ [stdclass](stdclass.html)
+ [is\_a()](is_a.html)
