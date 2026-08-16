# Execution Time
Execution time is a phase of PHP processing, where the source code is executed. It highly depends on the order of execution of the instructions. 

At that time, PHP takes the commands one after the other, and execute them. It allocates memory for data, and definitions. 

Execution time is related to compile time. Objects, constants when created with ``define()``, function calls, generators, inclusion, exceptions are execution time elements.

On the other hand, classes, constants when created with ``const``, functions, etc. are created at linting time.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution-time.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution-time.html","name":"Execution Time","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:27:57 +0000","dateModified":"Sun, 09 Aug 2026 13:27:57 +0000","description":"Execution time is a phase of PHP processing, where the source code is executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Execution Time.html"]}],"keywords":["syntax","execution"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/max_execution_time.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/info.configuration.php#ini.max-execution-time"},{"@type":"CreativeWork","name":"define","url":"https:\/\/www.php.net\/manual\/en\/function.define.php"},{"@type":"CreativeWork","name":"PHP manual: set_time_limit","url":"https:\/\/www.php.net\/manual\/en\/function.set-time-limit.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"execution-time"}]}]}</script>
```php
<?php

    const A = 'a';
    function foo(int $a = A) {
        echo $a;
    }
    
    foo(1);  // 1
    foo();   // Error
    //Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, string given, 

?>
```

**[Documentation](https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time)**
## See Also

+ [define](https://www.php.net/manual/en/function.define.php)
+ [PHP manual: set_time_limit](https://www.php.net/manual/en/function.set-time-limit.php)

## Related

+ [Const](const.html)
+ [define()](define.html)
+ [Compile Time](compile-time.html)
+ [Linting](lint.html)
+ [Late Static Binding](late-static-binding.html)
+ [max\_execution\_time](max_execution_time.html)
