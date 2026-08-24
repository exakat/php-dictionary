# array\_diff()
``array_diff()`` is a PHP native function that computes the difference between arrays, comparing values, using their string representation.

``array_diff()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose value is not present in any of the other arrays, keeping the original keys of ``$array``.

Values are compared as strings, so ``array_diff()`` may report false positives when comparing objects, arrays, or values with mixed types that share the same string representation.

There are several variants of this function: ``array_diff_key()`` compares the keys, instead of the values. ``array_diff_assoc()`` compares both keys and values. ``array_udiff()`` accepts a custom comparison callback for the values.

The complement function is ``array_intersect()``, which returns the elements that are shared amongst the arrays.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff.html","name":"array_diff()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:22:06 +0000","dateModified":"Mon, 17 Aug 2026 09:22:06 +0000","description":"array_diff() is a PHP native function that computes the difference between arrays, comparing values, using their string representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff.html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_assoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-diff.php"},{"@type":"CreativeWork","name":"PHP array_diff - Array Differences in PHP","url":"https:\/\/www.zetcode.com\/php-array\/array-diff\/"},{"@type":"CreativeWork","name":"A Comprehensive Guide to PHP's array_diff() Function","url":"https:\/\/reintech.io\/blog\/comprehensive-guide-to-php-array-diff-function"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_diff"}]}]}</script>
```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'green', 'yellow', 'red'];

    $result = array_diff($array1, $array2);
    print_r($result);
    // ['b' => 'brown', 'c' => 'blue']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-diff.php)**
## See Also

+ [PHP array_diff - Array Differences in PHP](https://www.zetcode.com/php-array/array-diff/)
+ [A Comprehensive Guide to PHP's array_diff() Function](https://reintech.io/blog/comprehensive-guide-to-php-array-diff-function)

## Related

+ [array\_intersect()](array_intersect.html)
+ [array\_diff\_key()](array_diff_key.html)
+ [array\_diff\_assoc()](array_diff_assoc.html)
+ [in\_array()](in_array.html)
