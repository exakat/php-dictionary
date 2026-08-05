# Deque
A deque is a special kind of stack and queue: it is actually both of them at the same time. It allows insertions and deletions at both ends.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deque.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deque.ini.html","name":"Deque","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A deque is a special kind of stack and queue: it is actually both of them at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Deque.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Datastack](datastack.ini.html)
+ [Data Structure](datastructure.ini.html)
+ [SplDoublyLinkedList](spldoublylinkedlist.ini.html)
