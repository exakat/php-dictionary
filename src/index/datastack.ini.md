# Datastack
A data stack is a LIFO data structure: the last data added to the stack is the first to get out.

A data stack may be implemented with an array, and the ``array_push()``, or ``$array[]`` operator, and the ``array_pop()`` functions. 

There is also a class called ``SplStack``, in the ``spl`` extension, and ``Ds\Stack`` in the ``ds`` extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datastack.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datastack.ini.html","name":"Datastack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:33:09 +0000","dateModified":"Tue, 16 Jun 2026 15:33:09 +0000","description":"A data stack is a LIFO data structure: the last data added to the stack is the first to get out","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Datastack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $stack = [];
    $stack[] = first;
    $stack[] = second;
    // same as array_push($stack, second);
    
    echo array_pop($stack); // Outputs: second

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Stack_(abstract_data_type))**
## See Also

+ [Ds\Stack](https://www.php.net/manual/en/class.ds-stack.php)

## Related

+ [SplStack](splstack.ini.html)
+ [Data Structure](ds.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [Last In, First Out (LIFO)](lifo.ini.html)
+ [Deque](deque.ini.html)
+ [Queue](queue.ini.html)
+ [Stack](stack.ini.html)
