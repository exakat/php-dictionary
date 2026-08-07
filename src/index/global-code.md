# Global Code
The global code is the code that doesn't belong to any method or function. Since PHP has no ``main()`` method that is called upon execution, the global code in the first file called is used. It is responsible to make the first calls to objects and functions.

Global code is usually organised in a sequential manner. Once the bootstrapping, which create the first objects, install autoload, detect environment, is done, the global code calls one object and let it handle the request.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-code.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-code.html","name":"Global Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:32 +0000","dateModified":"Wed, 05 Aug 2026 08:17:32 +0000","description":"The global code is the code that doesn't belong to any method or function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Global Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Global Code"}]}]}</script>
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

+ [Bootstrap](bootstrap.html)
+ [Order Of Execution](order-of-execution.html)
