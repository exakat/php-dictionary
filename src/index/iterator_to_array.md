# iterator\_to\_array()
``iterator_to_array()`` converts Iterators and Generators into an array. The iterator is entirely run, and each yielded value is stored in the resulting array.

While iterators play a similar role to arrays, they are not typed the same way. Sometimes, it might be necessary to pass an array rather than the iterator to a method. 

``iterator_to_array()`` may use a lot of memory: iterators often save memory by emitting values one by one, instead of creating them before running some more code. Here, ``iterator_to_array()`` runs the iterator and create the values before the next step.

``iterator_to_array()`` attempts to run infinite generators, until PHP runs out of memory.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator_to_array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator_to_array.html","name":"iterator_to_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``iterator_to_array()`` converts Iterators and Generators into an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator_to_array().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"iterator_to_array()"}]}]}</script>
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

+ [Iterator](iterator.html)
+ [Array, []](array.html)
+ [Generator](generator.html)
+ [Yield](yield.html)
+ [ArrayObject](arrayobject.html)
