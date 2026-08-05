# Recursive Array
A recursive array is an array that contains a reference to itself. It is a legit construction, although it introduces a loop, between an element and the original variable. This has impact on traversing the array, in particular to count or to compare the array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursive-array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursive-array.ini.html","name":"Recursive Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:46 +0000","dateModified":"Fri, 19 Jun 2026 21:29:46 +0000","description":"A recursive array is an array that contains a reference to itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Recursive Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
    $a = [1, 2, 3 => &$a];

    print_r($a);
    
    /**
    Array
(
    [0] => 1
    [1] => 2
    [3] => Array
 *RECURSION*
)
*/
?>
```

**[Documentation](https://en.wikipedia.org/wiki/Circular_reference)**
## Related

+ [References](reference.ini.html)
+ [Array, []](array.ini.html)
+ [Recursion](recursion.ini.html)
+ [RecursiveArrayIterator](recursivearrayiterator.ini.html)
