# Unreachable Code
Unreachable code refers to a section of code within a program that can never be executed during the program's runtime. It means that the code is written in such a way that it can never be reached or accessed by the program's execution flow.

Unreachable code can occur due to several reasons:

+ Conditional statements
+ Early return statements
+ Infinite loops
+ Branching with goto, yield, break, return, die...


<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unreachable-code.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unreachable-code.html","name":"Unreachable Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Unreachable code refers to a section of code within a program that can never be executed during the program's runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Unreachable Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Dead Code](dead-code.ini.html)
