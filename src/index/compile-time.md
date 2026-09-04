# Compile Time
Compile time, also called lint time or linting time, is a phase of PHP processing, where the source code is transformed into execution commands.

At that time, PHP figures out the syntax and code organisation, and also validates some aspects of the code, depending on the information availability. The information availability may depend on execution: for example, PHP validates interfaces when they are in the same file as the implementing class, but not when they are in different files, as autoloading needs to happen.

In particular, during compile time, PHP has only visibility on the current constant definitions: no inclusion, no ``define()``. It has no result from any function call, or variables.

Compile time is related to execution time and late static binding. Attributes, default values, constants, with ``const``, are fully compile time structures.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time.html","name":"Compile Time","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 09:36:04 +0000","dateModified":"Sun, 30 Aug 2026 09:36:04 +0000","description":"Compile time, also called lint time or linting time, is a phase of PHP processing, where the source code is transformed into execution commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time.html"]}],"alternateName":["lint-time","linting-time"],"keywords":["execution cycle"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Compile_time"},{"@type":"CreativeWork","name":"Difference between runtime exception and compile time exception in PHP","url":"https:\/\/www.geeksforgeeks.org\/php\/difference-between-runtime-exception-and-compile-time-exception-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"compile-time"}]}]}</script>
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
## See Also

+ [Difference between runtime exception and compile time exception in PHP](https://www.geeksforgeeks.org/php/difference-between-runtime-exception-and-compile-time-exception-in-php/)

## Related

+ [Execution Time](execution-time.html)
+ [Late Static Binding](late-static-binding.html)
