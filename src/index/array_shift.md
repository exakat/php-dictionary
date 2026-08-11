# array\_shift()
``array_shift()`` is a PHP native function that removes and returns the first element of an array. All numeric keys are re-indexed starting from zero; string keys are unaffected.

The operation is ``O(n)`` because all remaining numeric keys must be renumbered after the removal. This makes it slower than ``array_pop()``, which removes the last element in ``O(1)``.

Together with ``array_push()`` or the ``[]`` append operator, ``array_shift()`` enables a FIFO queue pattern.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_shift.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_shift.html","name":"array_shift()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_shift()`` is a PHP native function that removes and returns the first element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_shift().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_shift"}]}]}</script>
```php
<?php

    $array = [1, 2, 3, 4, 5];
    echo array_shift($array); // 1
    // $array == [2, 3, 4, 5];

    $array = ['a' => 'x', 0 => 'y', 1 => 'z'];
    echo array_shift($array); // x
    // $array == [0 => 'y', 1 => 'z'];

?>
```

**[Documentation](https://www.php.net/manual/en/function.array-shift.php)**
## Related

+ [array\_unshift()](array_unshift.html)
+ [array\_pop()](array_pop.html)
+ [array\_push()](array_push.html)
+ [array\_splice()](array_splice.html)
+ [First In, First Out (FIFO)](fifo.html)
+ [Queue](queue.html)
