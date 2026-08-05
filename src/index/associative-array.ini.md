# Associative Array
An associative array is an array whose keys are strings; there may also be integer index, mixed with the string ones. 

In the evolution of PHP, associative arrays evolved into objects, where the index in the array turned into property names.

It is possible to use types others than integer and string with an array syntax: this requires building an object for that. This is the case of ``Iterator`` and ``Weakmap``. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/associative-array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/associative-array.ini.html","name":"Associative Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:00:15 +0000","dateModified":"Tue, 04 Aug 2026 11:00:15 +0000","description":"An associative array is an array whose keys are strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Associative Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $associative = ['a' => 1, 'b' => 4, 3 => 5, 6 ];

    echo $associative['a'];

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## See Also

+ [Associative Arrays in PHP](https://blog.newtum.com/associative-array-in-php/)
+ [Arrays in PHP: Indexed, Associative, Multidimensional Arrays, and Array Functions](https://developers-heaven.net/blog/arrays-in-php-indexed-associative-multidimensional-arrays-and-array-functions/)

## Related

+ [Indexed Array](indexed-array.ini.html)
+ [Array, []](array.ini.html)
+ [Collection](collection.ini.html)
+ [Dictionary](dictionary.ini.html)
+ [Index](index.ini.html)
+ [ArrayAccess](arrayaccess.ini.html)
+ [Pair](pair.ini.html)
+ [Iterator](iterator.ini.html)
+ [Weakmap](weakmap.ini.html)
