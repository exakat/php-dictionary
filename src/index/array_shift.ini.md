# array\_shift()
``array_shift()`` is a PHP native function that removes and returns the first element of an array. All numeric keys are re-indexed starting from zero; string keys are unaffected.

The operation is ``O(n)`` because all remaining numeric keys must be renumbered after the removal. This makes it slower than ``array_pop()``, which removes the last element in ``O(1)``.

Together with ``array_push()`` or the ``[]`` append operator, ``array_shift()`` enables a FIFO queue pattern.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_shift.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_shift.ini.html","name":"array_shift()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_shift()`` is a PHP native function that removes and returns the first element of an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_shift().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [array\_unshift()](array_unshift.ini.html)
+ [array\_pop()](array_pop.ini.html)
+ [array\_push()](array_push.ini.html)
+ [array\_splice()](array_splice.ini.html)
+ [First In, First Out (FIFO)](fifo.ini.html)
+ [Queue](queue.ini.html)
