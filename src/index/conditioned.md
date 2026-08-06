# Conditioned Structures
Conditioned structures are definitions that are placed inside a condition structure. 

For example, it is possible to create a function or a class, only if it doesn't exist. 

Classes, traits, interfaces, global constants, with ``define()``, enumerations, functions may be conditioned. 

Class constants, properties, methods and cases, for ``enum``, cannot be conditioned.

Conditioned structures adapt the PHP context to external condition. For example, some function may become native after a specific PHP version, and is only redefined for older installation. 

Some structures do not accept condition, such as global constants with ``const`` keyword. With ``define()`` function, it is OK.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/conditioned.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/conditioned.html","name":"Conditioned Structures","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:17:06 +0000","dateModified":"Wed, 01 Jul 2026 10:17:06 +0000","description":"Conditioned structures are definitions that are placed inside a condition structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Conditioned Structures.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

if (!function_exists('foo')) {
    function foo() {
        // doSomething
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Conditional_(computer_programming))**
## Related

+ [Const](const.ini.html)
+ [define()](define.ini.html)
