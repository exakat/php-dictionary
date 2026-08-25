# array\_walk()
``array_walk()`` is a PHP native function that applies a closure to every element of an array.

``array_walk()`` uses the first argument as the array or object with the elements, the second argument as the callback, and the following subsequent arguments as one argument of that closure each. Any missing value in an array is assigned as ``null``, while a missing argument is a fatal error.

The callback may take two arguments. This way, it may apply modifications that take the key into account. This is unlike ``array_map()``.

If the walk has to be reflected in the source array, the first argument of the callback must be a reference, and it should be updated.

Although both methods are very similar, ``array_walk()`` and ``array_map()`` do not have the same argument order, return value nor behavior.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_walk.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_walk.html","name":"array_walk()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:52:31 +0000","dateModified":"Fri, 14 Aug 2026 07:52:31 +0000","description":"array_walk() is a PHP native function that applies a closure to every element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_walk.html"]}],"keywords":["native function","arbitrary number of argument"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_map.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-map.php"},{"@type":"CreativeWork","name":"Taming PHP\u2019s array_walk() Function: A Detailed Guide","url":"https:\/\/clouddevs.com\/php\/array_walk-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_walk"}]}]}</script>
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
