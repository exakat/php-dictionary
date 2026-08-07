# Semantics
Semantics is related with the meaning of things. In particular, when naming structures, such as variables, classes, methods, properties, goto labels, use alias, functions or constants, the name should be meaningful. 

While naming doesn't impact the code itself, as names are free, they do have a serious impact on human understanding of the code. 

It is also possible to find inconsistencies between the name and its usage. For example, when a name is used for an unexpected type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantics.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantics.html","name":"Semantics","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:31:16 +0000","dateModified":"Fri, 19 Jun 2026 21:31:16 +0000","description":"Semantics is related with the meaning of things","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Semantics.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Semantics"}]}]}</script>
```php
<?php

    function foo(User $commenter) { }

    // Inconsistence between the parameter name and its type
    function bar(array $string) { }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Semantics_(computer_science))**
## See Also

+ [PHP syntax and semantics](https://en.wikipedia.org/wiki/PHP_syntax_and_semantics)
+ [KPHP: An Executable Formal Semantics for PHP](https://phpsemantics.org/)

## Related

+ [Name](name.html)
+ [Name Conventions](name-convention.html)
+ [Typo](typo.html)
