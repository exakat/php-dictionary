# array\_intersect\_key()
``array_intersect_key()`` is a PHP native function that computes the intersection of arrays, comparing keys instead of values.

``array_intersect_key()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key is also present in every other array, keeping both the original keys and values of ``$array``.

Unlike ``array_intersect()``, the values themselves are never compared or cast to string, so ``array_intersect_key()`` is safe to use with arrays holding objects, arrays, or resources as values.

The complement function is ``array_diff_key()``, which returns the elements whose key is not shared amongst the arrays. ``array_intersect_assoc()`` compares both keys and values.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_key.html","name":"array_intersect_key()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:49:40 +0000","dateModified":"Wed, 26 Aug 2026 10:49:40 +0000","description":"array_intersect_key() is a PHP native function that computes the intersection of arrays, comparing keys instead of values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_key.html"]}],"keywords":["native function","array","arbitrary number of argument"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_exists.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-intersect-key.php"},{"@type":"CreativeWork","name":"PHP array_intersect_key - Array Key Intersection in PHP","url":"https:\/\/zetcode.com\/php-array\/array-intersect-key\/"},{"@type":"CreativeWork","name":"PHP array_intersect_key Function: How it Works with Examples","url":"https:\/\/flatcoding.com\/tutorials\/php\/php-array_intersect_key-function-how-it-works-with-examples\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_intersect_key"}]}]}</script>
```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'yellow', 'b' => 'orange', 'green'];

    $result = array_intersect_key($array1, $array2);
    print_r($result);
    // ['a' => 'green', 'b' => 'brown']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-intersect-key.php)**
## See Also

+ [PHP array_intersect_key - Array Key Intersection in PHP](https://zetcode.com/php-array/array-intersect-key/)
+ [PHP array_intersect_key Function: How it Works with Examples](https://flatcoding.com/tutorials/php/php-array_intersect_key-function-how-it-works-with-examples/)

## Related

+ [array\_intersect()](array_intersect.html)
+ [array\_diff\_key()](array_diff_key.html)
+ [array\_key\_exists()](array_key_exists.html)
