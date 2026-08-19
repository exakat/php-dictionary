# count()
``count()`` is a native PHP function, that returns the number of elements in the argument. 

``count()`` is basically meant to work on arrays: it returns the number of elements in the array. ``count()`` is also able to run recursively, when provided the second argument. 

By extension, ``count()`` works on classes of objects that implement the ``Countable`` interface.

It is a Fatal error to call ``count()`` on an object that can't be counted. Use ``is_countable()`` or type validation to make sure the data may be counted.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/count.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/count.html","name":"count()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:23 +0000","dateModified":"Tue, 11 Aug 2026 20:59:23 +0000","description":"count() is a native PHP function, that returns the number of elements in the argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/count().html"]}],"keywords":["php function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/countable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursive.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multidimensional-array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.count.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"count"}]}]}</script>
```php
<?php

echo count([1,2,3]); // 3

echo count([1,2,3, [4, 5]], COUNT_RECURSIVE); // 6 == 4 + 2 

class X implements Countable {
    function count() : int { 
        // arbitrary count
        return 7;
    }
}

echo count(new X); // 7

?>
```

**[Documentation](https://www.php.net/manual/en/function.count.php)**
## Related

+ [Countable Interface](countable.html)
+ [Array, []](array.html)
+ [Iterable](iterable.html)
+ [Recursion](recursive.html)
+ [Multidimensional Array](multidimensional-array.html)
