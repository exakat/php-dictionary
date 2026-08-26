# Deque
A deque is a special kind of stack and queue. It is actually both of them at the same time. It allows insertions and deletions at both ends.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html","name":"Deque","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:12:19 +0000","dateModified":"Sat, 15 Aug 2026 12:12:19 +0000","description":"A deque is a special kind of stack and queue","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html"]}],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spldoublylinkedlist.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Double-ended_queue"},{"@type":"CreativeWork","name":"Algorithms in PHP: Deques (and circular buffers + linked lists)","url":"https:\/\/withinboredom.info\/posts\/algorithms-in-php-deques-and-circular-buffers-linked-lists\/"},{"@type":"CreativeWork","name":"Deque Class","url":"https:\/\/www.php.net\/manual\/en\/class.ds-deque.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deque"}]}]}</script>
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
