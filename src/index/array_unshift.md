# array\_unshift()
``array_unshift()`` prepends one or more elements to the beginning of an array. All numeric keys are reset starting from zero, while string keys remain unchanged. The function returns the new number of elements in the array.

``array_unshift()`` is the opposite of ``array_shift()``, which removes and returns the first element. Together with ``array_push()`` and ``array_pop()``, these four functions are used to implement queue, FIFO, or stack, LIFO, data structures.

Note that ``array_unshift()`` is an ``O(n)`` operation because all integer keys must be renumbered.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_unshift.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_unshift.html","name":"array_unshift()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_unshift()`` prepends one or more elements to the beginning of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_unshift().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"array_unshift()"}]}]}</script>
```php
<?php

    $array = [1, 2, 3];
    $count = array_unshift($array, 0);
    // $array == [0, 1, 2, 3], $count == 4

    // Prepend multiple elements
    array_unshift($array, -2, -1);
    // $array == [-2, -1, 0, 1, 2, 3]

    // String keys are preserved; integer keys are reset
    $assoc = ['b' => 2, 'c' => 3];
    array_unshift($assoc, 1);
    // $assoc == [0 => 1, 'b' => 2, 'c' => 3]

?>
```

**[Documentation](https://www.php.net/array_unshift)**
## See Also

+ [array_unshift - PHP Manual](https://www.php.net/manual/en/function.array-unshift.php)

## Related

+ [array\_shift()](array_shift.html)
+ [array\_push()](array_push.html)
+ [array\_pop()](array_pop.html)
+ [First In, First Out (FIFO)](fifo.html)
+ [Last In, First Out (LIFO)](lifo.html)
+ [Array Prepend](prepend.html)
