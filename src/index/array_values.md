# array\_values()
The ``array_values()`` PHP native function returns the values in an array, with automatically generated indexes. It indexes anew the values as if they all were appended in the array, one after the other.

The values are in the same order as in the original array.

``array_values()`` provides a way to reach the value by position or offset, in an array, when the keys have been set arbitrarily. For the first value, there is the function ``array_first()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_values.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_values.html","name":"array_values()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:17 +0000","dateModified":"Wed, 19 Aug 2026 06:47:17 +0000","description":"The array_values() PHP native function returns the values in an array, with automatically generated indexes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_values.html"]}],"keywords":["php native"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-values.php"},{"@type":"CreativeWork","name":"Making Sense of PHP\u2019s array_values() Function","url":"https:\/\/clouddevs.com\/php\/array_values-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_values"}]}]}</script>
```php
<?php

    $array = ['a' => 1, 'b' => 2, ];

    // displays [1, 2]
    var_dump(array_values($array)); 

    $array = [-2 => 'a', 3 => 'b', 'c'];
    // displays ['a', 'b', 'c']; 
    // equivalent to [0 => 'a', 1 => 'b', 2 => 'c']; 
    var_dump(array_values($array)); 

    print array_values($array)[0]; // prints the first value, a
    print array_first($array);     // prints the first value, a
    print array_values($array)[1]; // prints the second value, b

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-values.php)**
## See Also

+ [Making Sense of PHP’s array_values() Function](https://clouddevs.com/php/array_values-function/)

## Related

+ [array\_keys()](array_keys.html)
+ [array\_combine()](array_combine.html)
