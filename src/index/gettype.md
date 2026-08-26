# gettype()
``gettype()`` is a PHP native function that returns the type of a variable as a string. Possible return values are ``"boolean"``, ``"integer"``, ``"double"``, ``"string"``, ``"array"``, ``"object"``, ``"resource"``, ``"resource (closed)"``, ``"NULL"``, and ``"unknown type"``.

These return values are historical and do not match the type names used in type declarations, such as ``int``, ``float``, or ``bool``: for that purpose, ``get_debug_type()``, available since PHP 8.0, is recommended, as it returns the actual type name, including the class name for objects.

``gettype()`` is mostly used for debugging or logging, rather than for type checking in conditional logic: dedicated functions like ``is_array()``, ``is_string()``, ``is_int()``, ``is_bool()`` are faster and clearer for that purpose. Changing a variable's type is done with ``settype()``, the counterpart of ``gettype()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html","name":"gettype()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:19:44 +0000","dateModified":"Thu, 16 Jul 2026 14:19:44 +0000","description":"gettype() is a PHP native function that returns the type of a variable as a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html"]}],"keywords":["function","type-checking"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_int.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_bool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_iterable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.gettype.php"},{"@type":"CreativeWork","name":"Type comparison tables","url":"https:\/\/www.php.net\/manual\/en\/types.comparisons.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gettype"}]}]}</script>
```php
<?php

    echo gettype(42);        // integer
    echo gettype(3.14);      // double
    echo gettype('hello');   // string
    echo gettype([1, 2]);    // array
    echo gettype(null);      // NULL
    echo gettype(new stdClass()); // object

?>
```

**[Documentation](https://www.php.net/manual/en/function.gettype.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [is\_array()](is_array.html)
+ [is\_string()](is_string.html)
+ [is\_int()](is_int.html)
+ [is\_bool()](is_bool.html)
+ [is\_iterable()](is_iterable.html)
+ [Type Checking](type-checking.html)
+ [Type Juggling](type-juggling.html)
