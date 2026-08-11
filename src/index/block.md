# Block
Blocks are zero, one or more instructions, grouped together with or without curly brackets.

A number of commands require blocks of instructions: ``namespace``, ``use``, ``function``, ``class``, ``trait``, ``interface``, ``enum``, ``closure``, ``switch``, ``match``, ``for``, ``foreach``, ``while``, ``do..while``, ``if-then``.  

Blocks may require brackets, like for ``class``, ``switch()``, ``function bodies``; they may be optional, like with ``case``, ``arrow-functions``, ``namespace`` or loops. 

A block may live on its own: it has no impact on the code, although it might be used to arbitrarily group instructions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/block.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/block.html","name":"Block","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Blocks are zero, one or more instructions, grouped together with or without curly brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Block.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"block"}]}]}</script>
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

+ [Body](body.html)
+ [Docblock](docblock.html)
+ [Bracketless](bracketless.html)
+ [Curly Brackets](curly-bracket.html)
