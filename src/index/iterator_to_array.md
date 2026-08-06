# iterator\_to\_array()
``iterator_to_array()`` converts Iterators and Generators into an array. The iterator is entirely run, and each yielded value is stored in the resulting array.

While iterators play a similar role to arrays, they are not typed the same way. Sometimes, it might be necessary to pass an array rather than the iterator to a method. 

``iterator_to_array()`` may use a lot of memory: iterators often save memory by emitting values one by one, instead of creating them before running some more code. Here, ``iterator_to_array()`` runs the iterator and create the values before the next step.

``iterator_to_array()`` attempts to run infinite generators, until PHP runs out of memory.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iterator_to_array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iterator_to_array.html","name":"iterator_to_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``iterator_to_array()`` converts Iterators and Generators into an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iterator_to_array().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo(): Generator {
        yield 1;
        yield 2;
        yield 3;
    }
    
    print_r(iterator_to_array(foo()));

?>
```

**[Documentation](https://www.php.net/manual/en/function.iterator-to-array.php)**
## Related

+ [Iterator](iterator.ini.html)
+ [Array, []](array.ini.html)
+ [Generator](generator.ini.html)
+ [Yield](yield.ini.html)
+ [ArrayObject](arrayobject.ini.html)
