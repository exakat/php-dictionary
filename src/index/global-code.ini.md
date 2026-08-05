# Global Code
The global code is the code that doesn't belong to any method or function. Since PHP has no ``main()`` method that is called upon execution, the global code in the first file called is used. It is responsible to make the first calls to objects and functions.

Global code is usually organised in a sequential manner. Once the bootstrapping, which create the first objects, install autoload, detect environment, is done, the global code calls one object and let it handle the request.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global-code.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/global-code.ini.html","name":"Global Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:32 +0000","dateModified":"Wed, 05 Aug 2026 08:17:32 +0000","description":"The global code is the code that doesn't belong to any method or function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Global Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// This is the global code
foo();

function foo() {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.phpmode.php)**
## See Also

+ [PHP Code Execution Flow](https://webkul.com/blog/php-code-execution-flow/)

## Related

+ [Bootstrap](bootstrap.ini.html)
+ [Order Of Execution](order-of-execution.ini.html)
