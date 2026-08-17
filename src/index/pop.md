# Pop
Pop is the operation of removing and returning the last element of a stack or array. It is the counterpart of push, and together they implement the Last-In, First-Out, LIFO, behaviour that defines a stack.

``array_pop()`` removes and returns the last element of an array, reducing its length by one. The array is passed by reference. If the array is empty, ``array_pop()`` returns ``null``.

For queue semantics, the counterpart operation is ``array_shift()``, which removes the first element.

PHP's ``SplStack`` and ``SplDoublyLinkedList`` also expose a ``pop()`` method that follows the same LIFO contract.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pop.html","name":"Pop","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:36:02 +0000","dateModified":"Mon, 29 Jun 2026 09:36:02 +0000","description":"Pop is the operation of removing and returning the last element of a stack or array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pop.html"]}],"keywords":["native function","array","data structure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_push.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_pop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lifo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fifo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insecure-deserialization.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-pop.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pop"}]}]}</script>
```php
<?php

    $stack = [1, 2, 3, 4];
    
    $last = array_pop($stack);
    echo $last;        // 4
    print_r($stack);   // [1, 2, 3]
    
    // Using SplStack
    $splStack = new SplStack();
    $splStack->push('a');
    $splStack->push('b');
    $splStack->push('c');
    
    echo $splStack->pop(); // c

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-pop.php)**
## Related

+ [array\_push()](array_push.html)
+ [array\_pop()](array_pop.html)
+ [Stack](stack.html)
+ [SplStack](splstack.html)
+ [Last In, First Out (LIFO)](lifo.html)
+ [First In, First Out (FIFO)](fifo.html)
+ [Data Structure](datastructure.html)
+ [Array, []](array.html)
+ [Insecure Deserialization](insecure-deserialization.html)
