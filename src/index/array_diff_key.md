# array\_diff\_key()
``array_diff_key()`` is a PHP native function that computes the difference between arrays, comparing keys instead of values.

``array_diff_key()`` takes an array ``$array``, and one or several other arrays ``...$arrays``. It returns a new array made of the elements of ``$array`` whose key is not present in any of the other arrays, keeping the original keys and values of ``$array``.

Since only the keys are compared, and never cast to string, ``array_diff_key()`` is safe to use with arrays holding objects, arrays, or resources as values.

The complement function is ``array_intersect_key()``, which returns the elements whose key is shared amongst the arrays. ``array_diff_assoc()`` compares both keys and values, while plain ``array_diff()`` compares values only.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_key.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_key.html","name":"array_diff_key()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:29:50 +0000","dateModified":"Tue, 18 Aug 2026 05:29:50 +0000","description":"array_diff_key() is a PHP native function that computes the difference between arrays, comparing keys instead of values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_key.html"]}],"keywords":["native function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_assoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect_key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_exists.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-diff-key.php"},{"@type":"CreativeWork","name":"PHP array_diff_key() Function","url":"https:\/\/www.w3schools.com\/php\/func_array_diff_key.asp"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_diff_key"}]}]}</script>
```php
<?php

    $array1 = ['a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red'];
    $array2 = ['a' => 'yellow', 'b' => 'orange', 'green'];

    $result = array_diff_key($array1, $array2);
    print_r($result);
    // ['c' => 'blue']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-diff-key.php)**
## See Also

+ [PHP array_diff_key() Function](https://www.w3schools.com/php/func_array_diff_key.asp)

## Related

+ [array\_diff()](array_diff.html)
+ [array\_diff\_assoc()](array_diff_assoc.html)
+ [array\_intersect\_key()](array_intersect_key.html)
+ [array\_key\_exists()](array_key_exists.html)
