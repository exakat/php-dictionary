# Traversable
Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface: it cannot be implemented directly, and instead, it must be implemented by either ``IteratorAggregate`` or ``Iterator``. 

The traversable interface is used for typing purposes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html","name":"Traversable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:00:39 +0000","dateModified":"Sat, 08 Aug 2026 08:00:39 +0000","description":"Traversable is a specific PHP interface that represents an object that can be iterated over","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/traversable.html"]}],"keywords":["interface","php interface"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outeriterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield-from.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iteratoraggregate.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.traversable.php"},{"@type":"CreativeWork","name":"Traversable interface in PHP","url":"https:\/\/blog.eduonix.com\/web-programming-tutorials\/traversable-interface-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"traversable"}]}]}</script>
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
