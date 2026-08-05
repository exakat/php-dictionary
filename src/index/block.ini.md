# Block
Blocks are zero, one or more instructions, grouped together with or without curly brackets.

A number of commands require blocks of instructions: ``namespace``, ``use``, ``function``, ``class``, ``trait``, ``interface``, ``enum``, ``closure``, ``switch``, ``match``, ``for``, ``foreach``, ``while``, ``do..while``, ``if-then``.  

Blocks may require brackets, like for ``class``, ``switch()``, ``function bodies``; they may be optional, like with ``case``, ``arrow-functions``, ``namespace`` or loops. 

A block may live on its own: it has no impact on the code, although it might be used to arbitrarily group instructions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/block.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/block.ini.html","name":"Block","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:12 +0000","dateModified":"Fri, 19 Jun 2026 21:25:12 +0000","description":"Blocks are zero, one or more instructions, grouped together with or without curly brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Block.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo($a) {
    if ($a) {
        $b = 1;
    } else 
        $b = 2;
        
    return $b;
}
?>
```

**[Documentation](https://en.wikipedia.org/wiki/Block_(programming))**
## Related

+ [Body](body.ini.html)
+ [Docblock](docblock.ini.html)
+ [Bracketless](bracketless.ini.html)
+ [Curly Brackets](curly-bracket.ini.html)
