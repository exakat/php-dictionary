# Userland
A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developers. ``userland`` features are opposed to ``native`` features, which are available within PHP itself.

Functions, classes, enums, traits, constants, etc. may be userland. Loaded components with composer from packagist are also userland structures. 

The main difference between userland and native features is tenuous. Though, some very specific feature may be reserved to native features. For example, magic methods are case-insensitive and magic, while userland constant cannot be case-insensitive. This is never critical.

There are some specific guidelines for userland naming. 

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/userland.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/userland.html","name":"Userland","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 07:51:46 +0000","dateModified":"Fri, 14 Aug 2026 07:51:46 +0000","description":"A userland feature, or definition, is a piece of code defined with PHP code, by one of the PHP developers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/userland.html"]}],"keywords":["term"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/built-in.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/userlandnaming.php"},{"@type":"CreativeWork","name":"User space","url":"https:\/\/en.wikipedia.org\/wiki\/User_space"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"userland"}]}]}</script>
```php
<?php

// foo is a userland function
function foo() {}

?>
```

**[Documentation](https://www.php.net/manual/en/userlandnaming.php)**
## See Also

+ [User space](https://en.wikipedia.org/wiki/User_space)

## Related

+ [Custom](custom.html)
+ [Native](built-in.html)
+ [Native](native.html)
