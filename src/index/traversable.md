# Traversable
Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface: it cannot be implemented directly, and instead, it must be implemented by either ``IteratorAggregate`` or ``Iterator``. 

The traversable interface is used for typing purposes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html","name":"Traversable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:00:39 +0000","dateModified":"Sat, 08 Aug 2026 08:00:39 +0000","description":"Traversable is a specific PHP interface that represents an object that can be iterated over","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Traversable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"traversable"}]}]}</script>
```php
<?php

    try {
        doSomething();
    } catch (\Traversable $e) {
        print "Some error was raised during processing: ". $e::class;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.traversable.php)**
## See Also

+ [Traversable interface in PHP](https://blog.eduonix.com/web-programming-tutorials/traversable-interface-in-php/)

## Related

+ [Exception](exception.html)
+ [Error](error.html)
+ [Iterable](iterable.html)
+ [OuterIterator](outeriterator.html)
+ [PHP Native Interfaces](php-interface.html)
+ [yield from Keyword](yield-from.html)
+ [IteratorAggregate](iteratoraggregate.html)
