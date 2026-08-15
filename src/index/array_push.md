# array\_push()
``array_push()`` adds the second argument, and all the next, to the end of the array, passed as first argument. A new index is created for each new entry, in order.

``array_push()`` adds the new elements and creates the new keys. It is not possible to specify a key with this function: one should use the ``$array['key'] = $value`` syntax.

``array_pop()`` is the equivalent operation of the ``[]`` append operator. It is the opposite of ``array_push()``. With these functions, it is possible to build FIFO stack.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_push.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_push.html","name":"array_push()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"array_push() adds the second argument, and all the next, to the end of the array, passed as first argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_push().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_push"}]}]}</script>
```php
<?php

    $array = [0, 1, 2];
    print array_push($array, 3, 4); // 5, the number of elements
    // $array == [0, 1, 2, 3, 4];

    $array = [0, 1, 2];
    $array[] = 3; 
    // $array == [0, 1, 2, 3];

    $array = [0, 1, 2];
    $array[33] = 3; 
    // $array == [0, 1, 2, 33 => 3];
    
?>
```

**[Documentation](https://www.php.net/manual/fr/function.array-pop.php)**
## See Also

+ [Introduction to Stacks & Queues in PHP](https://dev.to/matusstafura/introduction-to-stacks-queues-in-php-1lpf)

## Related

+ [Index For Arrays](index-array.html)
+ [array\_pop()](array_pop.html)
+ [First In, First Out (FIFO)](fifo.html)
+ [array\_shift()](array_shift.html)
+ [array\_unshift()](array_unshift.html)
+ [Pop](pop.html)
+ [Array Prepend](prepend.html)
