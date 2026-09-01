# Datastack
A data stack is a LIFO data structure: the last data added to the stack is the first to get out.

A data stack may be implemented with an array, and the ``array_push()``, or ``$array[]`` operator, and the ``array_pop()`` functions. 

There is also a class called ``SplStack``, in the ``spl`` extension, and ``Ds\Stack`` in the ``ds`` extension.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html","name":"Datastack","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:26:00 +0000","dateModified":"Wed, 19 Aug 2026 08:26:00 +0000","description":"A data stack is a LIFO data structure: the last data added to the stack is the first to get out","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html"]}],"keywords":["data structure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ds.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lifo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deque.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stack.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Stack_(abstract_data_type)"},{"@type":"CreativeWork","name":"Ds\\Stack","url":"https:\/\/www.php.net\/manual\/en\/class.ds-stack.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datastack"}]}]}</script>
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
