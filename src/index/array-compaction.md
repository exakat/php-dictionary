# Array Compaction
Array compaction is removing the gaps from an array's keys, so that the remaining elements are numbered again from 0 without holes. An array with holes, such as ``[0 => 'a', 2 => 'c']``, becomes ``[0 => 'a', 1 => 'c']``.

Gaps appear after removing elements, for instance with ``unset()``, or with ``array_filter()``, which keeps the original keys of the elements it retains. ``array_values()`` compacts the array: it returns the values only, with new sequential keys. ``array_splice()`` also renumbers the elements it keeps.

Compaction changes the keys, so it is not always what is wanted. A map keyed by ID would lose its meaning, and ``array_values()`` should only be used when the position of each element is what matters. When the keys must stay, the array is left as it is.

A compacted array is also a packed array internally, which lets PHP store it more efficiently. See the entry on compact arrays for that aspect.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-compaction.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-compaction.html","name":"Array Compaction","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 10:02:05 +0000","dateModified":"Tue, 10 Nov 2026 10:02:05 +0000","description":"Array compaction is removing the gaps from an array's keys, so that the remaining elements are numbered again from 0 without holes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-compaction.html"]}],"alternateName":["array-reindexing"],"keywords":["array","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_values.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_splice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-values.php"},{"@type":"CreativeWork","name":"array_values()","url":"https:\/\/www.php.net\/manual\/en\/function.array-values.php"},{"@type":"CreativeWork","name":"array_filter()","url":"https:\/\/www.php.net\/manual\/en\/function.array-filter.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-compaction"}]}]}</script>
```php
<?php

    $items = ['a', 'b', 'c', 'd'];
    unset($items[1]);
    // [0 => 'a', 2 => 'c', 3 => 'd'] : there is a gap at key 1

    $compacted = array_values($items);
    // [0 => 'a', 1 => 'c', 2 => 'd'] : keys renumbered

    // array_filter keeps the original keys, so it leaves gaps too
    $filtered = array_filter([1, 0, 2, 0, 3]);
    // [0 => 1, 2 => 2, 4 => 3]
    $compactFiltered = array_values($filtered);
    // [0 => 1, 1 => 2, 2 => 3]

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-values.php)**
## See Also

+ [array_values()](https://www.php.net/manual/en/function.array-values.php)
+ [array_filter()](https://www.php.net/manual/en/function.array-filter.php)

## Related

+ [Compact Array](compact-array.html)
+ [array\_values()](array_values.html)
+ [array\_filter()](array_filter.html)
+ [array\_splice()](array_splice.html)
+ [unset()](unset.html)
+ [Array, []](array.html)
