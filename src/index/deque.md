# Deque
A deque, short for double-ended queue, pronounced "deck", is a linear data structure that generalizes both a stack and a queue by allowing elements to be inserted and removed efficiently, in constant time, from either end: the front and the back. Unlike a plain queue, which is restricted to FIFO access, inserting at one end and removing at the other, or a plain stack, which is restricted to LIFO access, inserting and removing at the same end, a deque supports all four basic operations: push front, push back, pop front, and pop back. This extra flexibility makes it a natural building block for algorithms that need both stack-like and queue-like behavior at once, such as sliding-window problems, undo and redo history, work-stealing task schedulers, palindrome checking, and breadth-first search variants that must inspect or remove elements from both ends of the frontier. A deque is provided by the ``Ds\Deque`` class from the Data Structures ``ds`` extension, which stores its elements in a resizable array buffer rather than a doubly linked list, giving amortized constant time for insertions and deletions at either end while also allowing constant time random access by index, capacity pre-allocation, and standard iteration through the Traversable interface.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html","name":"Deque","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 08:19:50 +0000","dateModified":"Tue, 01 Sep 2026 08:19:50 +0000","description":"A deque, short for double-ended queue, pronounced \"deck\", is a linear data structure that generalizes both a stack and a queue by allowing elements to be inserted and removed efficiently, in constant time, from either end: the front and the back","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html"]}],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spldoublylinkedlist.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Double-ended_queue"},{"@type":"CreativeWork","name":"Algorithms in PHP: Deques (and circular buffers + linked lists)","url":"https:\/\/withinboredom.info\/posts\/algorithms-in-php-deques-and-circular-buffers-linked-lists\/"},{"@type":"CreativeWork","name":"Deque Class","url":"https:\/\/www.php.net\/manual\/en\/class.ds-deque.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deque"}]}]}</script>
```php
<?php

    $deque = new \Ds\Deque();
    
    $deque->insert(0, e);             // [e]
    $deque->insert(1, f);             // [e, f]
    $deque->insert(2, g);             // [e, f, g]
    $deque->insert(0, a, b);        // [a, b, e, f, g]
    $deque->insert(2, ...[c, d]);   // [a, b, c, d, e, f, g]
    
    var_dump($deque);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Double-ended_queue)**
## See Also

+ [Algorithms in PHP: Deques (and circular buffers + linked lists)](https://withinboredom.info/posts/algorithms-in-php-deques-and-circular-buffers-linked-lists/)
+ [Deque Class](https://www.php.net/manual/en/class.ds-deque.php)

## Related

+ [Datastack](datastack.html)
+ [Data Structure](datastructure.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.html)
