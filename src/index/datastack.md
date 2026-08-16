# Datastack
A data stack is a LIFO data structure: the last data added to the stack is the first to get out.

A data stack may be implemented with an array, and the ``array_push()``, or ``$array[]`` operator, and the ``array_pop()`` functions. 

There is also a class called ``SplStack``, in the ``spl`` extension, and ``Ds\Stack`` in the ``ds`` extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html","name":"Datastack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:33:09 +0000","dateModified":"Tue, 16 Jun 2026 15:33:09 +0000","description":"A data stack is a LIFO data structure: the last data added to the stack is the first to get out","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Datastack.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datastack"}]}]}</script>
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

+ [SplStack](splstack.html)
+ [Data Structure](ds.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [Last In, First Out (LIFO)](lifo.html)
+ [Deque](deque.html)
+ [Queue](queue.html)
+ [Stack](stack.html)
