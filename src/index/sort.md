# Sort
Sorting is the action to put a list of object into a specific order. Sorting only applies to arrays: object cannot be sorted.

There are several ways to sort arrays: by value, by key, with ``k`` prefix, or by value while keeping the keys, with the ``a`` prefix, for associative. 

Then, the sort may be ascending, descending, with the ``r`` prefix as as in reverse, or custom, with the ``u`` prefix, as in user sort. Custom sort is done with a closure or similar.

Based on the prefixes above, the following PHP native functions are available: ``sort()``, ``rsort()``, ``usort()``, ``ksort()``, ``krsort()``, ``uksort()``, ``asort()``, ``uasort()``. There is not ``ursort()``, as the reverse part of the sort may be coded in the custom closure.

In case of ex-aequo values while sorting, which are values with the same order, the values are sorted in the same order than the original array. This behavior has changed in version 7.0.

It is also possible to sort using a natural sort, which is a way to sort strings like a human would read them: ``natsort()``.

The default comparison between elements may be adapted with ``sort()``'s parameter: regular, numeric, string, locale, natural and with or without case.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sort.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sort.html","name":"Sort","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:48 +0000","dateModified":"Sat, 08 Aug 2026 14:32:48 +0000","description":"Sorting is the action to put a list of object into a specific order","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Sort.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sort"}]}]}</script>
```php
<?php

    $fruits = ['Orange1', 'orange2', 'Orange3', 'orange20'];
    sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
    
    foreach ($fruits as $key => $val) {
        echo 'fruits[' . $key . '] = ' . $val . PHP_EOL;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.sort.php)**
## See Also

+ [natural sort](https://www.php.net/natsort)

## Related

+ [Array, []](array.html)
+ [Closure](closure.html)
+ [Constant Combination](constant-combinaison.html)
+ [Swap](swap.html)
