# Jump
A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another. In fact, it is bypassing the normal sequential execution.

There are a few constructs that qualify as jumps: ``goto``, ``break``, ``continue``, ``yield``, ``yield from``, ``throw``, ``return``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jump.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/jump.ini.html","name":"Jump","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:47:27 +0000","dateModified":"Sat, 11 Jul 2026 14:47:27 +0000","description":"A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Jump.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo(int $a) {
        // jumps out of the method
        if ($a > 10) { return; }
        
        foreach(range(1, 10) as $i) {
            if (doSomething($i, $a)) {
                // jumps out of the loop
                break 1; 
            }
        }
        
        // normal execution
        return $a + 1;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.control-structures.php)**
## Related

+ [Goto](goto.ini.html)
+ [Return](return.ini.html)
+ [Break](break.ini.html)
+ [Continue](continue.ini.html)
+ [throw](throw.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [If Then Else](if-then.ini.html)
+ [yield from Keyword](yield-from.ini.html)
+ [Yield](yield.ini.html)
