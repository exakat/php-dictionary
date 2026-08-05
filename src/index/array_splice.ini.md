# array\_splice()
``array_splice()`` is a PHP native function that removes a portion of an array.

``array_splice()`` takes the array ``$array``, starts at the offset ``$offset`` and collects ``$length`` elements. Then it returns the extracted array, and update the incoming ``$array``.

``$offset`` is the position of the index in the array, not the key itself. As usual, it starts at 0. String keys, or arbitrary keys or arbitrary order of the inserted values are ignored: consider that ``array_splice()`` works on the result of ``array_values()``. Use sorting beforehand to ensure the key order is taken into account, when needed.

``array_splice()`` also offers a parameter ``$replacement``, which inserts another array in the place of the cut section of the array. By default, it inserts nothing.

The complement function is ``array_slice()``, which extracts an array from another.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_splice.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_splice.ini.html","name":"array_splice()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_splice()`` is a PHP native function that removes a portion of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_splice().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // simple example
    $array = [1, 2, 3, 4,];
    array_splice($array, 1, 2);
    print_r($array);
    // [1, 4]
    
    // with keys
    $array = ['a' => 1, 3 => 2, 3, -1 => 4,];
    array_splice($array, 1, 2);
    print_r($array);
    // [1, 4]
    
    // with replacement
    $array = [1, 2, 3, 4,];
    array_splice($array, 1, 2, [6]);
    print_r($array);
    // [1, 6, 4]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-slice.php)**
## See Also

+ [PHP | Difference between array_slice() and array_splice()](https://www.thedataops.org/php-difference-between-array_slice-and-array_splice/)

## Related

+ [array\_slice()](array_slice.ini.html)
+ [array\_shift()](array_shift.ini.html)
