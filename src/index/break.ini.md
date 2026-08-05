# Break
``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure.

``break`` accepts an optional argument, which tells how many enclosing structures are to be broken out of. 

``break`` should not be confused with ``continue``: ``continue`` doesn't work in a ``switch``, like ``break`` does.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/break.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/break.ini.html","name":"Break","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Break.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

foreach([1,2,3] as $b) {
    // break upon the first even number
    if ($b % 2 == 0) {
        break;
    }
    
    echo $b;
}

foreach([1,2,3] as $b1) {
    foreach([1,2,3] as $b2) {
        // break upon the first even number
        if (($b1 + $b2) % 2 == 0) {
            break 2; // exit both loops
        }
    }
    
    echo $b1 + $b2;
}

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.break.php)**
## See Also

+ [Difference between break and continue in PHP](https://www.geeksforgeeks.org/php/difference-between-break-and-continue-in-php/)
+ [BREAKING MULTIPLE LOOPS IN PHP](https://mmramadan.com/loop-control/breaking-multiple-loops-in-php)

## Related

+ [Continue](continue.ini.html)
+ [Switch](switch.ini.html)
+ [Loops](loop.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [InfiniteIterator](infiniteiterator.ini.html)
+ [Jump](jump.ini.html)
+ [Switch Case](switch-case.ini.html)
