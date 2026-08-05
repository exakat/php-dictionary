# OutOfRangeException
``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range. It is a subclass of the LogicException class.

The ``OutOfRangeException`` is typically thrown when accessing an array or collection with an index that is either negative or exceeds the valid range of indices. It can also be thrown when working with iterators or other data structures that have a defined range of valid values.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/outofrangeexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/outofrangeexception.ini.html","name":"OutOfRangeException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/OutOfRangeException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $list = new SplDoublyLinkedList();
    
    try {
        // Adding 5 at index 2, while it should be added a 0 (empty list)
        $list->add(2,5);
    } catch (OutOfRangeException $e) {
        echo 'Exception: '.$e->getMessage()."\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.outofrangeexception.php)**
## Related

+ [Exception](exception.ini.html)
+ [LogicException](logicexception.ini.html)
