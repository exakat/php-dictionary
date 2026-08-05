# Execution Time
Execution time is a phase of PHP processing, where the source code is executed. It highly depends on the order of execution of the instructions. 

At that time, PHP takes the commands one after the other, and execute them. It allocates memory for data, and definitions. 

Execution time is related to compile time. Objects, constants when created with ``define()``, function calls, generators, inclusion, exceptions are execution time elements.

On the other hand, classes, constants when created with ``const``, functions, etc. are created at linting time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/execution-time.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/execution-time.ini.html","name":"Execution Time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:07 +0000","dateModified":"Fri, 19 Jun 2026 21:25:07 +0000","description":"Execution time is a phase of PHP processing, where the source code is executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Execution Time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Const](const.ini.html)
+ [define()](define.ini.html)
+ [Compile Time](compile-time.ini.html)
+ [Linting](lint.ini.html)
+ [Late Static Binding](late-static-binding.ini.html)
+ [max\_execution\_time](max_execution_time.ini.html)
