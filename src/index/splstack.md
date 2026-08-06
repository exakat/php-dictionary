# SplStack
The ``SplStack`` class is part of the Standard PHP Library, SPL. It provides a stack data structure, Last‑In, First‑Out or LIFO, by extending ``SplDoublyLinkedList`` and setting the iteration mode to treat the list as a stack.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splstack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/splstack.html","name":"SplStack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:06:32 +0000","dateModified":"Tue, 07 Jul 2026 08:06:32 +0000","description":"The ``SplStack`` class is part of the Standard PHP Library, SPL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SplStack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $q = new SplStack();
    $q[] = 1;
    $q[] = 2;
    $q[] = 3;
    foreach ($q as $elem)  {
     echo $elem.\n;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.splstack.php)**
## Related

+ [SplDoublyLinkedList](spldoublylinkedlist.ini.html)
+ [Last In, First Out (LIFO)](lifo.ini.html)
+ [Datastack](datastack.ini.html)
+ [Data Structure](datastructure.ini.html)
+ [Pop](pop.ini.html)
