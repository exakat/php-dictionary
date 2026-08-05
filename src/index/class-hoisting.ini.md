# Class Hoisting
Class hoisting is a compilation mode where the declaration of functions, classes... are moved before their actual usage.

This allows the usage of functions that are declared later in the code. 

PHP doesn't do class hoisting: it does two passes on the code, and later, triggers the autoload if a class is missing.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-hoisting.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/class-hoisting.ini.html","name":"Class Hoisting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:58 +0000","dateModified":"Fri, 19 Jun 2026 21:25:58 +0000","description":"Class hoisting is a compilation mode where the declaration of functions, classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Hoisting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// displays foo
foo();

function foo() { echo __FUNCTION__; }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Declaration_(computer_programming))**
## See Also

+ [Early binding in PHP](https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html)

## Related

+ [Class Autoloading](autoload.ini.html)
+ [Linting](lint.ini.html)
+ [Hoisting](hoisting.ini.html)
+ [Order Of Execution](order-of-execution.ini.html)
