# array\_intersect\_assoc()
``array_intersect_assoc()`` is a PHP native function that computes the intersection of arrays, comparing both keys and values, using their string representation.

``array_intersect_assoc()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key/value pair is also present, with the same key and the same value, in every other array.

An element is only kept when both its key and its value match an entry in every other array; the same value under a different key, or the same key with a different value, is excluded from the result. Values are compared as strings, so the same false-positive risk as ``array_intersect()`` applies when comparing objects, arrays, or mixed types sharing a string representation.

The complement function is ``array_diff_assoc()``, which returns the elements whose key/value pair is not shared amongst the arrays. ``array_intersect_key()`` compares keys only, and plain ``array_intersect()`` compares values only.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_assoc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_assoc.html","name":"array_intersect_assoc()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 07:37:14 +0000","dateModified":"Sun, 30 Aug 2026 07:37:14 +0000","description":"array_intersect_assoc() is a PHP native function that computes the intersection of arrays, comparing both keys and values, using their string representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_assoc.html"]}],"keywords":["native function","array","arbitrary number of argument"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_assoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-intersect-assoc.php"},{"@type":"CreativeWork","name":"PHP array_intersect_assoc() Function","url":"https:\/\/www.w3schools.com\/php\/func_array_intersect_assoc.asp"},{"@type":"CreativeWork","name":"PHP array_intersect_assoc - Array Comparison in PHP","url":"https:\/\/zetcode.com\/php-array\/array-intersect-assoc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_intersect_assoc"}]}]}</script>
```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_intersect_assoc($array1, $array2);
    print_r($result);
    // ['a' => 'green']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-intersect-assoc.php)**
## See Also

+ [PHP array_intersect_assoc() Function](https://www.w3schools.com/php/func_array_intersect_assoc.asp)
+ [PHP array_intersect_assoc - Array Comparison in PHP](https://zetcode.com/php-array/array-intersect-assoc/)

## Related

+ [array\_intersect()](array_intersect.html)
+ [array\_intersect\_key()](array_intersect_key.html)
+ [array\_diff\_assoc()](array_diff_assoc.html)
+ [in\_array()](in_array.html)
