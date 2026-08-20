# array\_diff\_assoc()
``array_diff_assoc()`` is a PHP native function that computes the difference between arrays, comparing both keys and values, using their string representation.

``array_diff_assoc()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key/value pair is not present, with the same key and the same value, in any of the other arrays.

An element is only excluded when both its key and its value match an entry in another array; the same value under a different key, or the same key with a different value, is kept in the result. Values are compared as strings, so the same false-positive risk as ``array_diff()`` applies when comparing objects, arrays, or mixed types sharing a string representation.

The complement function is ``array_intersect_assoc()``, which returns the elements whose key/value pair is shared amongst the arrays. ``array_diff_key()`` compares keys only, and plain ``array_diff()`` compares values only.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_assoc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_assoc.html","name":"array_diff_assoc()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:29:58 +0000","dateModified":"Tue, 18 Aug 2026 05:29:58 +0000","description":"array_diff_assoc() is a PHP native function that computes the difference between arrays, comparing both keys and values, using their string representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_assoc().html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-diff-assoc.php"},{"@type":"CreativeWork","name":"PHP array_diff_assoc - Array Comparison in PHP","url":"https:\/\/zetcode.com\/php-array\/array-diff-assoc\/"},{"@type":"CreativeWork","name":"PHP array_diff_assoc() - Difference of arrays - Examples","url":"https:\/\/www.tutorialkart.com\/php\/php-array-diff-assoc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_diff_assoc"}]}]}</script>
```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_diff_assoc($array1, $array2);
    print_r($result);
    // ['b' => 'brown', 'c' => 'blue', 0 => 'red']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-diff-assoc.php)**
## See Also

+ [PHP array_diff_assoc - Array Comparison in PHP](https://zetcode.com/php-array/array-diff-assoc/)
+ [PHP array_diff_assoc() - Difference of arrays - Examples](https://www.tutorialkart.com/php/php-array-diff-assoc/)

## Related

+ [array\_diff()](array_diff.html)
+ [array\_diff\_key()](array_diff_key.html)
+ [in\_array()](in_array.html)
