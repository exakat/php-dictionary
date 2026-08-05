# Constants
Constants are named values, that never change. 

Constants may be created with the const keyword or the ``define()`` function. They may be tested for existence with the ``defined()`` function.

There are global constants, which are accessible with their name and their namespaces. There are also constants in classes, interfaces, enums and traits. Those are called class constant.

Constants are namespace dependent. They can be imported using the ``use const`` command. 

Constants are usually written in uppercase. 

Global constants used to be case insensitive, when created with ``define()``. This feature was removed in version 8.0. Nowadays, both ``const`` and ``define`` create case insensitive values.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant.ini.html","name":"Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:25:23 +0000","dateModified":"Tue, 16 Jun 2026 15:25:23 +0000","description":"Constants are named values, that never change","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Static Constant](class-constant.ini.html)
+ [Centralization](centralization.ini.html)
+ [Constant Scalar Expression](constant-scalar-expression.ini.html)
+ [Dynamic Constant](dynamic-constant.ini.html)
+ [New In Initializers](new-in-initializer.ini.html)
+ [Predefined Constants](predefined-constant.ini.html)
+ [Class Constant Syntax](class-constant-syntax.ini.html)
+ [Constant Case](constant-case.ini.html)
+ [define()](define.ini.html)
+ [Literal](literal.ini.html)
+ [Anonymous Constant](anonymous-constant.ini.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.ini.html)
+ [Dynamic Class Constant](dynamic-class-constant.ini.html)
+ [Hard Coded](hard-coded.ini.html)
+ [Magic Numbers](magic-number.ini.html)
+ [Order Of Execution](order-of-execution.ini.html)
