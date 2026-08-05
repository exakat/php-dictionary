# Hoisting
Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution. It is notably a JavaScript feature and not a PHP feature.

PHP does not support hoisting for variables: a variable must be assigned before it is read, or it will be undefined.

PHP functions are pre-compiled and can be called before their textual declaration in the same file, which may look like hoisting but is actually the result of PHP's two-pass compilation model.

PHP classes are not hoisted either: a class must be declared, autoloaded, before it is instantiated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hoisting.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hoisting.ini.html","name":"Hoisting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:52:11 +0000","dateModified":"Fri, 03 Jul 2026 07:52:11 +0000","description":"Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Hoisting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // This works: functions are pre-compiled
    greet();
    
    function greet() { echo 'Hello'; }
    
    // This does NOT work: variables are not hoisted
    echo $message; // Undefined variable
    
    $message = 'Hello';

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Glossary/Hoisting)**
## See Also

+ [What is Hoisting in JavaScript?](https://www.freecodecamp.org/news/what-is-hoisting-in-javascript/)

## Related

+ [Class Hoisting](class-hoisting.ini.html)
+ [Class Autoloading](autoload.ini.html)
+ [Undefined](undefined.ini.html)
+ [Compiler](compilation.ini.html)
+ [Cache](cache.ini.html)
+ [Order Of Execution](order-of-execution.ini.html)
