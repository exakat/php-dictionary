# Array Prepend
Prepend is an array operation, which adds an element at the beginning of the array. It is also called a shift.

There are one function for this feature: ``array_unshift()``. It takes the array, and the value to add, returns a new array.

The opposite operation is a pop, with the function ``array_shift()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prepend.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prepend.html","name":"Array Prepend","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Prepend is an array operation, which adds an element at the beginning of the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array Prepend.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Array Prepend"}]}]}</script>
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

+ [Array Append](append.html)
+ [array\_unshift()](array_unshift.html)
+ [array\_push()](array_push.html)
