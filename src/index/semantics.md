# Semantics
Semantics is related with the meaning of things. In particular, when naming structures, such as variables, classes, methods, properties, goto labels, use alias, functions or constants, the name should be meaningful. 

While naming doesn't impact the code itself, as names are free, they do have a serious impact on human understanding of the code. 

It is also possible to find inconsistencies between the name and its usage. For example, when a name is used for an unexpected type.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantics.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantics.html","name":"Semantics","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Semantics is related with the meaning of things","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantics.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typo.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Semantics_(computer_science)"},{"@type":"CreativeWork","name":"PHP syntax and semantics","url":"https:\/\/en.wikipedia.org\/wiki\/PHP_syntax_and_semantics"},{"@type":"CreativeWork","name":"KPHP: An Executable Formal Semantics for PHP","url":"https:\/\/phpsemantics.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"semantics"}]}]}</script>
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
