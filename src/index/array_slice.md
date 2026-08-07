# array\_slice()
``array_slice()`` is a PHP native function that extracts a portion of an array.

``array_slice()`` takes the array ``$array``, starts at the offset ``$offset`` and collects ``$length`` elements. Then it returns the array.

``$offset`` is the position of the index in the array, not the key itself. As usual, it starts at 0. String keys, or arbitrary keys or arbitrary order of the inserted values are ignored: consider that ``array_slice()`` works on the result of ``array_values()``. Use sorting beforehand to ensure the key order is taken into account, when needed.

``array_slice()`` also offers a parameter ``$preserve_keys``, which keeps the original keys: only string keys are preserved, integer keys are reindexed, starting at 0. It is disabled by default.

The complement function is ``array_splice()``, which extracts an array from another, and keeps the external portions.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_slice.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_slice.html","name":"array_slice()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_slice()`` is a PHP native function that extracts a portion of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_slice().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"array_slice()"}]}]}</script>
```php
<?php

    // simple example
    $array = [1, 2, 3, 4,];
    print_r(array_slice($array, 1, 2));
    // [2, 3]
    
    // with keys
    $array = ['a' => 1, 3 => 2, 3, -1 => 4,];
    print_r(array_slice($array, 1, 2));
    // [2, 3]
    
    // with preserve_keys
    $array = ['a' => 1, 'd' => 2, 5 => 3, -1 => 4,];
    print_r(array_slice($array, 1, 2, true));
    // ['d' => 2, 0 => 3]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-slice.php)**
## See Also

+ [PHP | Difference between array_slice() and array_splice()](https://www.thedataops.org/php-difference-between-array_slice-and-array_splice/)

## Related

+ [array\_splice()](array_splice.html)
