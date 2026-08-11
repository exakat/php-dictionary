# Destructuring
Destructuring is a general programming concept where the individual elements of a compound value, such as an array, a list, or an object, are extracted in one step and bound to separate variables, instead of being accessed one at a time by index or property.

Many languages have dedicated destructuring syntax that also supports skipping elements, providing default values, capturing remaining elements, and destructuring nested structures in a single expression.

Destructuring is provided by ``list()`` and its short array syntax ``[ ]`` on the left side of an assignment, and by ``foreach()`` when iterating over arrays of arrays. PHP does not support destructuring of arbitrary objects, though ``list()`` may be combined with ArrayAccess-implementing objects.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructuring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructuring.html","name":"Destructuring","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:50 +0000","dateModified":"Thu, 06 Aug 2026 05:50:50 +0000","description":"Destructuring is a general programming concept where the individual elements of a compound value, such as an array, a list, or an object, are extracted in one step and bound to separate variables, instead of being accessed one at a time by index or property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Destructuring.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"destructuring"}]}]}</script>
```php
<?php

    // array destructuring, PHP style
    [$a, $b, $c] = [1, 2, 3];

    // skipping an element
    [$first, , $third] = [1, 2, 3];

    // keyed destructuring
    ['name' => $name, 'age' => $age] = ['name' => 'Ann', 'age' => 30];

    // nested destructuring
    [[$x, $y], [$z]] = [[1, 2], [3]];

    // destructuring while iterating
    foreach ([[1, 2], [3, 4]] as [$left, $right]) {
        echo $left + $right, "\n";
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Assignment_(computer_science)#Assignment_of_multiple_values)**
## See Also

+ [Destructuring assignment (MDN, JavaScript reference used as general illustration)](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment)

## Related

+ [List](list.html)
+ [Array, []](array.html)
+ [Multiple Return Values](multiple-return-value.html)
+ [Structural Pattern Matching](structural-pattern-matching.html)
+ [Tuple](tuple.html)
+ [Assignment](assignment.html)
