# Associative Array
An associative array is an array whose keys are strings; there may also be integer index, mixed with the string ones. 

In the evolution of PHP, associative arrays evolved into objects, where the index in the array turned into property names.

It is possible to use types others than integer and string with an array syntax: this requires building an object for that. This is the case of ``Iterator`` and ``Weakmap``. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/associative-array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/associative-array.html","name":"Associative Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:00:15 +0000","dateModified":"Tue, 04 Aug 2026 11:00:15 +0000","description":"An associative array is an array whose keys are strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Associative Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Associative Array"}]}]}</script>
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

+ [Indexed Array](indexed-array.html)
+ [Array, []](array.html)
+ [Collection](collection.html)
+ [Dictionary](dictionary.html)
+ [Index](index.html)
+ [ArrayAccess](arrayaccess.html)
+ [Pair](pair.html)
+ [Iterator](iterator.html)
+ [Weakmap](weakmap.html)
