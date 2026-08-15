# Unreachable Code
Unreachable code refers to a section of code within a program that can never be executed during the program's runtime. It means that the code is written in such a way that it can never be reached or accessed by the program's execution flow.

Unreachable code can occur due to several reasons:

+ Conditional statements
+ Early return statements
+ Infinite loops
+ Branching with goto, yield, break, return, die...


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unreachable-code.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unreachable-code.html","name":"Unreachable Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:51 +0000","dateModified":"Mon, 10 Aug 2026 16:53:51 +0000","description":"Unreachable code refers to a section of code within a program that can never be executed during the program's runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Unreachable Code.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unreachable-code"}]}]}</script>
```php
<?php

    $a = 1;
    echo foo($a);
    
    exit; 
    
    // This is unreachable code, as it will never be executed
    echo $a; 
    
    // This is not unreachable, as PHP scoops the definition at linting time
    function foo($s) {
        return strtolower($s);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Unreachable_code)**
## See Also

+ [Dead-code elimination](https://en.wikipedia.org/wiki/Dead-code_elimination)

## Related

+ [Dead Code](dead-code.html)
