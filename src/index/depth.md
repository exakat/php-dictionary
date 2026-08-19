# Depth
Depth is a measure of how many an operation has been repeatedly applies, over and over. 

It applies to several concepts: 

+ Multi-dimensional array depth: ``$array['d1']['d2']['d3']['d4']``
+ Recursion depth: see example
+ Nested loop depth: number of loops inside a loop
+ Callstack depth: number of functions calling another one
+ Object inheritance depth: the maximum number of extension levels in a class hierarchy

Depth might be limited, when it is prevented from going beyond a certain level, or unlimited, when there is no such limit. For example, xdebug offers a directive called ``xdebug.max_nesting_level`` that limits nesting depth.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/depth.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/depth.html","name":"Depth","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:21 +0000","dateModified":"Mon, 17 Aug 2026 09:06:21 +0000","description":"Depth is a measure of how many an operation has been repeatedly applies, over and over","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Depth.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/callstack.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Recursion_(computer_science)"},{"@type":"CreativeWork","name":"Understanding Recursion Tree Depth and Logarithmic Levels","url":"https:\/\/medium.com\/@ilakk2023\/understanding-recursion-tree-depth-and-logarithmic-levels-9f3747dabedf"},{"@type":"CreativeWork","name":"Fixing PHP Fatal error: Nesting level too deep","url":"https:\/\/www.slingacademy.com\/article\/fixing-php-fatal-error-nesting-level-too-deep-recursive-dependency\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"depth"}]}]}</script>
```php
<?php

    // The recursion depth is limited to 5
    function foo($level = 0) { 
        if ($level < 5) { 
            return foo($level + 1);
        } 
        return 1;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Recursion_(computer_science))**
## See Also

+ [Understanding Recursion Tree Depth and Logarithmic Levels](https://medium.com/@ilakk2023/understanding-recursion-tree-depth-and-logarithmic-levels-9f3747dabedf)
+ [Fixing PHP Fatal error: Nesting level too deep](https://www.slingacademy.com/article/fixing-php-fatal-error-nesting-level-too-deep-recursive-dependency/)

## Related

+ [Callstack](callstack.html)
