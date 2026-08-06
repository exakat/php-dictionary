# Compile Time
Compile time is a phase of PHP processing, where the source code is transformed into execution commands. 

At that time, PHP figures out the syntax and code organisation, and also validates some aspects of the code, depending on the information availability. The information availability may depend on execution: for example, PHP validates interfaces when they are in the same file as the implementing class, but not when they are in different files, as autoloading needs to happen.

In particular, during compile time, PHP has only visibility on the current constant definitions: no inclusion, no ``define()``. It has no result from any function call, or variables.

Compile time is related to execution time and late static binding. Attributes, default values, constants, with ``const``, are fully compile time structures.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compile-time.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compile-time.html","name":"Compile Time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:30:55 +0000","dateModified":"Fri, 24 Jul 2026 15:30:55 +0000","description":"Compile time is a phase of PHP processing, where the source code is transformed into execution commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Compile Time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    const S = 'abc'; 
    
    class y {
        const T = 'abc';
        const string U = z::A ? '2' : 'abc'; // PHP waits for z 
    }
    
    class x {
       private int $a = S;     // execution time 
       //private int $b = y::T;  // compile time error
       private int $c = y::U;  // execution time error
    }
    
?>
```

**[Documentation](https://en.wikipedia.org/wiki/Compile_time)**
## Related

+ [Execution Time](execution-time.ini.html)
+ [Late Static Binding](late-static-binding.ini.html)
