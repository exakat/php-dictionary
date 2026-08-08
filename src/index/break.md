# Break
``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure.

``break`` accepts an optional argument, which tells how many enclosing structures are to be broken out of. 

``break`` should not be confused with ``continue``: ``continue`` doesn't work in a ``switch``, like ``break`` does.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html","name":"Break","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Break.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Break"}]}]}</script>
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

+ [Continue](continue.html)
+ [Switch](switch.html)
+ [Loops](loop.html)
+ [Control Flow](control-flow.html)
+ [InfiniteIterator](infiniteiterator.html)
+ [Jump](jump.html)
+ [Switch Case](switch-case.html)
