# Userland
A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer. ``userland`` features are opposed to ``native`` features, which are available within PHP itself.

Functions, classes, enums, traits, constants, etc. may be userland. Loaded component with composer from packagist are also userland structures. 

The main difference between userland and native features are tenuous. Though, some very specific feature may be reserved to native features. For example, magic methods are case-insensitive and magic, while userland constant cannot be case-insensitive. This is never critical.

There are some specific guidelines for userland naming. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/userland.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/userland.html","name":"Userland","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:30:01 +0000","dateModified":"Mon, 29 Jun 2026 09:30:01 +0000","description":"A ``userland`` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Userland.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// foo is a userland function
function foo() {}

?>
```

**[Documentation](https://www.php.net/manual/en/userlandnaming.php)**
## Related

+ [Custom](custom.ini.html)
+ [Native](built-in.ini.html)
+ [Native](native.ini.html)
