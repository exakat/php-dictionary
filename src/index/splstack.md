# SplStack
The ``SplStack`` class is part of the Standard PHP Library, SPL. It provides a stack data structure, Last‑In, First‑Out or LIFO, by extending ``SplDoublyLinkedList`` and setting the iteration mode to treat the list as a stack.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstack.html","name":"SplStack","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"The SplStack class is part of the Standard PHP Library, SPL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splstack.html"]}],"keywords":["php class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spldoublylinkedlist.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lifo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datastructure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pop.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.splstack.php"},{"@type":"CreativeWork","name":"PHP: SplDoublyLinkedList","url":"https:\/\/www.php.net\/manual\/en\/class.spldoublylinkedlist.php"},{"@type":"CreativeWork","name":"PHP: SplQueue","url":"https:\/\/www.php.net\/manual\/en\/class.splqueue.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"splstack"}]}]}</script>
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
## See Also

+ [PHP: SplDoublyLinkedList](https://www.php.net/manual/en/class.spldoublylinkedlist.php)
+ [PHP: SplQueue](https://www.php.net/manual/en/class.splqueue.php)

## Related

+ [SplDoublyLinkedList](spldoublylinkedlist.html)
+ [Last In, First Out (LIFO)](lifo.html)
+ [Datastack](datastack.html)
+ [Data Structure](datastructure.html)
+ [Pop](pop.html)
