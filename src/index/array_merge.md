# array\_merge()
``array_merge()`` combines all the arrays passed as argument into one argument. 

``array_merge()`` accepts an arbitrary list of arrays: in terms of performances, it is better to call it with all the arrays once, rather than merge arrays one after the other.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_merge.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_merge.html","name":"array_merge()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_merge()`` combines all the arrays passed as argument into one argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_merge().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    
    array_merge($array1, $array2);
    // [1, 2, 3, 4, 5, 6];
    
    $arrays = [$array1, $array2]; // may be more... 
    array_merge(...$arrays); 
    // [1, 2, 3, 4, 5, 6];

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-merge.php)**
## See Also

+ [Effortlessly Merge Arrays: When to Use array_merge vs. the Splat Operator](https://medium.com/@jochelle.mendonca/effortlessly-merge-arrays-when-to-use-array-merge-vs-the-splat-operator-4f422baf893b)

## Related

+ [Plus +](plus.ini.html)
+ [Merge](merge.ini.html)
