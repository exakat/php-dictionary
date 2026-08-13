# array\_walk()
``array_walk()`` is a PHP native function that applies a closure to every element of an array.

``array_walk()`` use the first argument as the array or object with the elements, the second argument as the callback, and the following subsequent arguments as one argument of that closure each. Any missing value in an array is assigned as ``null``, while a missing argument is a fatal error.

The callback may take two arguments. This way, it may apply modifications that take the key into account. This is unlike ``array_map()``.

If the walk has to be reflected in the source array, the first argument of the callback must be a reference, and it should be updated.

Although both methods are very similar, ``array_walk()``  and ``array_map()`` do no have the same argument order, return value nor behavior.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_walk.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_walk.html","name":"array_walk()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"array_walk() is a PHP native function that applies a closure to every element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_walk().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_walk"}]}]}</script>
```php
<?php

    function square(&$x, $c) { $x = $x * $x + $c; }
    
    $array = [1,2,3];
    array_walk($array, square(...));
    print_r($array);
    // [1, 5, 11];

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-map.php)**
## See Also

+ [Taming PHP’s array_walk() Function: A Detailed Guide](https://clouddevs.com/php/array_walk-function/)

## Related

+ [array\_map()](array_map.html)
