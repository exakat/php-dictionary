# Jump
A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another. In fact, it is bypassing the normal sequential execution.

There are a few constructs that qualify as jumps: ``goto``, ``break``, ``continue``, ``yield``, ``yield from``, ``throw``, ``return``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jump.html","name":"Jump","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:47:27 +0000","dateModified":"Sat, 11 Jul 2026 14:47:27 +0000","description":"A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Jump.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Jump"}]}]}</script>
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

+ [Goto](goto.html)
+ [Return](return.html)
+ [Break](break.html)
+ [Continue](continue.html)
+ [throw](throw.html)
+ [Control Flow](control-flow.html)
+ [If Then Else](if-then.html)
+ [yield from Keyword](yield-from.html)
+ [Yield](yield.html)
