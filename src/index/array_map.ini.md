# array\_map()
``array_map()`` is a PHP native function that applies a closure to every element of an array.

``array_map()`` uses the first argument as the callback, and the following subsequent arguments as one argument of that closure each. Any missing value in an array is assigned as ``null``, while a missing argument is a fatal error.

``array_map()`` only provides the value in the array, and not the related key: this should be done with ``array_walk()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_map.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_map.ini.html","name":"array_map()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_map()`` is a PHP native function that applies a closure to every element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_map().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function square($x) { return $x * $x; }
    
    $array = [1,2,3];
    $squared = array_map(square(...), $array);
    // [1, 4, 9];
    
    function squareSum($x, $y) { return $x ** 2 + $y ** 2; }
    
    $squareSums = array_map(squareSum(...), [1, 2, 3], [4, 5]); // array_map uses the longest array

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-map.php)**
## See Also

+ [PHP array_map Function: How to Transform Arrays with Examples](https://flatcoding.com/tutorials/php/array_map/)
+ [PHP array_map for associative array](https://inspector.dev/php-array_map-for-associative-array-fast-tips/)

## Related

+ [array\_walk()](array_walk.ini.html)
