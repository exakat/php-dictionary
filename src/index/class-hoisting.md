# Class Hoisting
Class hoisting is a compilation mode where the declarations of functions, classes... are moved before their actual usage.

This allows the usage of functions that are declared later in the code. 

PHP doesn't do class hoisting: it does two passes on the code, and later, triggers the autoload if a class is missing.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hoisting.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hoisting.html","name":"Class Hoisting","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:28 +0000","dateModified":"Wed, 19 Aug 2026 06:48:28 +0000","description":"Class hoisting is a compilation mode where the declarations of functions, classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hoisting.html"]}],"keywords":["concept","compilation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hoisting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Declaration_(computer_programming)"},{"@type":"CreativeWork","name":"Early binding in PHP","url":"https:\/\/www.npopov.com\/2021\/10\/20\/Early-binding-in-PHP.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class-hoisting"}]}]}</script>
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

+ [Class Autoloading](autoload.html)
+ [Linting](lint.html)
+ [Hoisting](hoisting.html)
+ [Order Of Execution](order-of-execution.html)
