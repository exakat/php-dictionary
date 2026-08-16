# is\_object()
``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class. It is the equivalent of ``object`` type, which cannot be used with ``instanceof``; or the ``(object)`` cast, that turns a value into an object of class ``stdClass``.

``is_object()`` is rarely used, as ``instanceof`` with the expected class or interface is more precise.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object.html","name":"is_object()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:09 +0000","dateModified":"Sun, 16 Aug 2026 07:46:09 +0000","description":"is_object() is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_object().html"]}],"keywords":["object","native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdclass.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_a.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.is-object.php"},{"@type":"CreativeWork","name":"gettype","url":"https:\/\/www.php.net\/manual\/en\/function.gettype.php"},{"@type":"CreativeWork","name":"is_a","url":"https:\/\/www.php.net\/manual\/en\/function.is-a.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is_object"}]}]}</script>
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
## See Also

+ [gettype](https://www.php.net/manual/en/function.gettype.php)
+ [is_a](https://www.php.net/manual/en/function.is-a.php)

## Related

+ [instanceof](instanceof.html)
+ [stdclass](stdclass.html)
+ [is\_a()](is_a.html)
