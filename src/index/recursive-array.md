# Recursive Array
A recursive array is an array that contains a reference to itself. It is a legit construction, although it introduces a loop, between an element and the original variable. This has impact on traversing the array, in particular to count or to compare the array.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursive-array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursive-array.html","name":"Recursive Array","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:10:50 +0000","dateModified":"Fri, 14 Aug 2026 08:10:50 +0000","description":"A recursive array is an array that contains a reference to itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursive-array.html"]}],"keywords":["self-reference"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/print_r.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivearrayiterator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Circular_reference"},{"@type":"CreativeWork","name":"References Explained","url":"https:\/\/www.php.net\/manual\/en\/language.references.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"recursive-array"}]}]}</script>
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
## See Also

+ [References Explained](https://www.php.net/manual/en/language.references.php)

## Related

+ [References](reference.html)
+ [Array, []](array.html)
+ [print\_r()](print_r.html)
+ [Recursion](recursion.html)
+ [RecursiveArrayIterator](recursivearrayiterator.html)
