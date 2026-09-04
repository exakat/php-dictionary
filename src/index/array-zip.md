# Array Zip
Array zip is the operation of combining several arrays element-by-element and by position. The first zipped element groups together every array's first item, the second zipped element groups together every array's second item, and so on. It is also called a transpose, since it turns a list of parallel arrays into a list of rows, the way ``array_column()`` turns a list of rows into a single column.

PHP has no native ``zip()`` function, but ``array_map()`` performs exactly this operation when its callback is ``null``: instead of applying a callback, ``array_map()`` groups the corresponding elements of the arrays it receives into an array of arrays.

Just like ``array_merge()``, this pattern accepts an arbitrary number of arrays, which may be collected in one array and passed with the spread operator. If the arrays have different lengths, ``array_map()`` pads the shorter ones with ``null``, so the result always has as many rows as the longest input array.

Array zip is not related to the zip archive, which compress data.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-zip.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-zip.html","name":"Array Zip","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 31 Aug 2026 17:30:05 +0000","dateModified":"Mon, 31 Aug 2026 17:30:05 +0000","description":"Array zip is the operation of combining several arrays element-by-element and by position","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-zip.html"]}],"alternateName":["transpose"],"keywords":["concept","arbitrary number of argument"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_map.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_merge.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zip.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-map.php"},{"@type":"CreativeWork","name":"Python: zip()","url":"https:\/\/docs.python.org\/3\/library\/functions.html#zip"},{"@type":"CreativeWork","name":"Zipping up multiple arrays using array_map in PHP","url":"https:\/\/www.amitmerchant.com\/zipping-up-multiple-arrays-using-array-map-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-zip"}]}]}</script>
```php
<?php

    $names = ['Alice', 'Bob', 'Carol'];
    $ages  = [30, 25, 35];

    $zipped = array_map(null, $names, $ages);
    // [['Alice', 30], ['Bob', 25], ['Carol', 35]]

    $arrays = [$names, $ages]; // may be more...
    array_map(null, ...$arrays);
    // [['Alice', 30], ['Bob', 25], ['Carol', 35]]

    // shorter arrays are padded with null
    array_map(null, [1, 2, 3], ['a', 'b']);
    // [[1, 'a'], [2, 'b'], [3, null]]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-map.php)**
## See Also

+ [Python: zip()](https://docs.python.org/3/library/functions.html#zip)
+ [Zipping up multiple arrays using array_map in PHP](https://www.amitmerchant.com/zipping-up-multiple-arrays-using-array-map-in-php/)

## Related

+ [array\_map()](array_map.html)
+ [array\_merge()](array_merge.html)
+ [array\_column](array_column.html)
+ [array\_combine()](array_combine.html)
+ [Array, []](array.html)
+ [zip Extension](zip.html)
