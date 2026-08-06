# array\_keys()
``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array.

``array_keys()`` has second parameter, which filters the keys by their corresponding value. Only the keys with the provided value are reported. 

``array_keys()`` has third parameter, which activate the identity comparison for the second argument, rather than the type-juggling default one.

``array_keys()`` always returns a new array with numeric keys starting from 0. It preserves the order of appearance of the matching keys.

``array_keys()`` returns an empty array, when provided with an empty array. It also works with multi-dimensional arrays, but only scans the first level.

``array_keys()`` does not work on objects. It may work, with caveats, by casting the object to array with ``(array)``.

``array_keys()`` is a complement to ``array_values``, which returns only the values. It is the partial contrary to ``array_combine()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_keys.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_keys.html","name":"array_keys()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_keys()`` returns all keys, both integer and string, as a new numerically indexed array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_keys().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = [
        'name'  => 'Alice',
        10      => 'ten',
        'age'   => 25,
        'active'=> true
    ];

    $keys = array_keys($array);
    // Result: ['name', 10, 'age', 'active']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-keys.php)**
## See Also

+ [PHP array_keys: How to Extract Keys in Arrays with Examples](https://flatcoding.com/tutorials/php/php-array_keys-how-to-extract-keys-in-arrays-with-examples/)

## Related

+ [Multidimensional Array](multidimensional-array.ini.html)
+ [Cast Operator](cast.ini.html)
+ [Comparison](comparison.ini.html)
+ [Index For Arrays](index-array.ini.html)
+ [array\_values()](array_values.ini.html)
+ [array\_combine()](array_combine.ini.html)
+ [array\_unique()](array_unique.ini.html)
