# Array Prepend
Prepend is an array operation, which adds an element at the beginning of the array. It is also called a shift.

There are one function for this feature: ``array_unshift()``. It takes the array, and the value to add, returns a new array.

The opposite operation is a pop, with the function ``array_shift()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/prepend.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/prepend.html","name":"Array Prepend","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Prepend is an array operation, which adds an element at the beginning of the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array Prepend.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = [1, 2, 3];
    
    array_push($array, 6);
    
    // $array === [1, 2, 3, 6];

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.array.php)**
## See Also

+ [array_unshift - PHP Manual](https://www.php.net/manual/en/function.array-unshift.php)

## Related

+ [Array Append](append.ini.html)
+ [array\_unshift()](array_unshift.ini.html)
+ [array\_push()](array_push.ini.html)
