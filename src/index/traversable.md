# Traversable
Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface: it cannot be implemented directly, and instead, it must be implemented by either IteratorAggregate or Iterator. 

The traversable interface is used for typing purposes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/traversable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/traversable.html","name":"Traversable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Traversable is a specific PHP interface that represents an object that can be iterated over","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Traversable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Exception](exception.ini.html)
+ [Error](error.ini.html)
+ [Iterable](iterable.ini.html)
+ [OuterIterator](outeriterator.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [yield from Keyword](yield-from.ini.html)
+ [IteratorAggregate](iteratoraggregate.ini.html)
