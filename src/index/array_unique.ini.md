# array\_unique()
The ``array_unique()`` PHP native function removes duplicate values from an array. It is important to note that it treats values as strings for comparison by default, unless a specific sort flag is provided.

The second parameter, ``flags``, can be used to modify the comparison behavior:
- ``SORT_STRING``: compare items as strings, by default.
- ``SORT_REGULAR``: compare items normally. This is equivalent to ``===`` comparison, and works with enumerations.
- ``SORT_NUMERIC``: compare items numerically.
- ``SORT_LOCALE_STRING``: compare items as strings, based on the current locale.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_unique.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_unique.ini.html","name":"array_unique()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``array_unique()`` PHP native function removes duplicate values from an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_unique().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = [1, '1', 2, 2];
    
    // Default behavior (SORT_STRING): returns [1, 2]
    var_dump(array_unique($array)); 
    
    // SORT_REGULAR: treats 1 and '1' as different if they are of different types
    // Note: with SORT_REGULAR, it still might return only one value if types are loosely equal
    var_dump(array_unique($array, SORT_REGULAR));
    
    // Preserve keys: array_unique preserves keys by default
    $arrayWithKeys = ['a' => 'red', 'b' => 'green', 'c' => 'red'];
    var_dump(array_unique($arrayWithKeys)); // returns ['a' => 'red', 'b' => 'green']

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-unique.php)**
## See Also

+ [Understanding and Implementing PHP's `array_unique()` Function](https://reintech.io/blog/understanding-implementing-php-array-unique-function)

## Related

+ [array\_keys()](array_keys.ini.html)
