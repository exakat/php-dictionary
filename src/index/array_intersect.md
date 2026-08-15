# array\_intersect()
``array_intersect()`` is a PHP native function that computes the intersection of arrays, comparing values, using their string representation.

``array_intersect()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose value is also present in every other array, keeping the original keys of ``$array``.

Values are compared as strings, so ``array_intersect()`` may report false positives when comparing objects, arrays, or values with mixed types that share the same string representation.

There are several variants of this function: ``array_intersect_key()`` compares the keys, instead of the values. ``array_intersect_assoc()`` compares both keys and values. ``array_uintersect()`` accepts a custom comparison callback for the values.

The complement function is ``array_diff()``, which returns the elements that are not shared amongst the arrays.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect.html","name":"array_intersect()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:41:44 +0000","dateModified":"Fri, 14 Aug 2026 08:41:44 +0000","description":"array_intersect() is a PHP native function that computes the intersection of arrays, comparing values, using their string representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_intersect"}]}]}</script>
```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_intersect($array1, $array2);
    print_r($result);
    // ['a' => 'green', 0 => 'red']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-intersect.php)**
## See Also

+ [PHP array_intersect() Function](https://www.w3schools.com/php/func_array_intersect.asp)
+ [PHP array_intersect() vs array_intersect_key(): What's the Difference?](https://www.slingacademy.com/article/php-array-intersect-vs-array-intersect-key-whats-the-difference/)

## Related

+ [in\_array()](in_array.html)
