# Custom
A feature is called ``custom`` when it is not part of the standard installation of PHP, any PHP extension or a publish library. For example, the function ``foo()`` is generally a custom function.

Any declaration object may be custom: constants, variables, classes, interfaces, enums, traits. 

A custom asset is usually the last to be defined, and, as such, has to use a distinct name. For example, declaring a function called ``wp_header`` is possible as long as the code is not part of Wordpress, which does declare it as a common set of features.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/custom.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/custom.html","name":"Custom","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:23:48 +0000","dateModified":"Fri, 19 Jun 2026 21:23:48 +0000","description":"A feature is called ``custom`` when it is not part of the standard installation of PHP, any PHP extension or a publish library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Custom.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// This is a custom function
function foo() {}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/User-defined_function)**
## Related

+ [Native](built-in.ini.html)
+ [Userland](userland.ini.html)
