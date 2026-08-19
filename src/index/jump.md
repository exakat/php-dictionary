# Jump
A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another. In fact, it is bypassing the normal sequential execution.

There are a few constructs that qualify as jumps: ``goto``, ``break``, ``continue``, ``yield``, ``yield from``, ``throw``, ``return``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jump.html","name":"Jump","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:09:30 +0000","dateModified":"Sat, 15 Aug 2026 12:09:30 +0000","description":"A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Jump.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/goto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/break.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/continue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throw.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield-from.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.control-structures.php"},{"@type":"CreativeWork","name":"goto","url":"https:\/\/www.php.net\/manual\/en\/control-structures.goto.php"},{"@type":"CreativeWork","name":"Control flow (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Control_flow"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"jump"}]}]}</script>
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
## See Also

+ [goto](https://www.php.net/manual/en/control-structures.goto.php)
+ [Control flow (Wikipedia)](https://en.wikipedia.org/wiki/Control_flow)

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
