# Break
``break`` is a control structure, which ends execution of the current ``for``, ``foreach``, ``while``, ``do-while`` or ``switch`` structure.

``break`` accepts an optional argument, which tells how many enclosing structures are to be broken out of. 

``break`` should not be confused with ``continue``: ``continue`` doesn't work in a ``switch``, like ``break`` does.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html","name":"Break","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 07:45:01 +0000","dateModified":"Tue, 11 Aug 2026 07:45:01 +0000","description":"break is a control structure, which ends execution of the current for, foreach, while, do-while or switch structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html"]}],"keywords":["keyword","changed behavior"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/continue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infiniteiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jump.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-case.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.break.php"},{"@type":"CreativeWork","name":"Difference between break and continue in PHP","url":"https:\/\/www.geeksforgeeks.org\/php\/difference-between-break-and-continue-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"break"}]}]}</script>
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

## Related

+ [Continue](continue.html)
+ [Switch](switch.html)
+ [Loops](loop.html)
+ [Control Flow](control-flow.html)
+ [InfiniteIterator](infiniteiterator.html)
+ [Jump](jump.html)
+ [Switch Case](switch-case.html)
