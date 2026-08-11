# Constants
Constants are named values, that never change. 

Constants may be created with the const keyword or the ``define()`` function. They may be tested for existence with the ``defined()`` function.

There are global constants, which are accessible with their name and their namespaces. There are also constants in classes, interfaces, enums and traits. Those are called class constant.

Constants are namespace dependent. They can be imported using the ``use const`` command. 

Constants are usually written in uppercase. 

Global constants used to be case insensitive, when created with ``define()``. This feature was removed in version 8.0. Nowadays, both ``const`` and ``define`` create case insensitive values.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html","name":"Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Constants are named values, that never change","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Constants.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constant"}]}]}</script>
```php
<?php

const A = 1;
define('B', 2);

// displays 1
echo A;

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.php)**
## See Also

+ [Understanding PHP Constants: A Simple Guide with Examples](https://flatcoding.com/tutorials/php/understanding-the-php-constant-expression/)

## Related

+ [Static Constant](class-constant.html)
+ [Centralization](centralization.html)
+ [Constant Scalar Expression](constant-scalar-expression.html)
+ [Dynamic Constant](dynamic-constant.html)
+ [New In Initializers](new-in-initializer.html)
+ [Predefined Constants](predefined-constant.html)
+ [Class Constant Syntax](class-constant-syntax.html)
+ [Constant Case](constant-case.html)
+ [define()](define.html)
+ [Literal](literal.html)
+ [Anonymous Constant](anonymous-constant.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.html)
+ [Dynamic Class Constant](dynamic-class-constant.html)
+ [Hard Coded](hard-coded.html)
+ [Magic Numbers](magic-number.html)
+ [Order Of Execution](order-of-execution.html)
