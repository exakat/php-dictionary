# array\_pop()
``array_pop()`` removes the last inserted element in an array, and returns it. The original array is reduced by one element.

``array_pop()`` removes the last element and the last key of the array. The operation is quick, ``O(1)`` of big O complexity. 

``array_pop()`` is the opposite operation of ``array_push()`` or the ``[]`` append operator. With these functions, it is possible to build FIFO stack.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pop.html","name":"array_pop()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_pop()`` removes the last inserted element in an array, and returns it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pop().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"array_pop()"}]}]}</script>
```php
<?php

    $array = [1, 2, 3, 4, 5];
    echo array_pop($array); // 5
    // $array == [1, 2, 3, 4];

    $array = [1, 2, 3, 4];
    $array[] = -2;
    echo array_pop($array); // -2
    
?>
```

**[Documentation](https://www.php.net/manual/fr/function.array-pop.php)**
## See Also

+ [Introduction to Stacks & Queues in PHP](https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf)

## Related

+ [Array Append](array-append.html)
+ [array\_push()](array_push.html)
+ [First In, First Out (FIFO)](fifo.html)
+ [array\_shift()](array_shift.html)
+ [array\_unshift()](array_unshift.html)
+ [Pop](pop.html)
