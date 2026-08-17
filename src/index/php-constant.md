# PHP Constants
PHP provides a set of predefined global constants. 

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``T_READONLY`` was not defined, and appeared in version 8.1. 

It is possible to list all available PHP native constants with the function ``get_declared_constants()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-constant.html","name":"PHP Constants","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP provides a set of predefined global constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Constants.html"]}],"keywords":["variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/super-global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directory_separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-line.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.php"},{"@type":"CreativeWork","name":"Understanding PHP Constants: A Simple Guide with Examples","url":"https:\/\/flatcoding.com\/tutorials\/php\/understanding-the-php-constant-expression\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-constant"}]}]}</script>
```php
<?php

    print E_ALL;

    print PHP_VERSION;

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.php)**
## See Also

+ [Understanding PHP Constants: A Simple Guide with Examples](https://flatcoding.com/tutorials/php/understanding-the-php-constant-expression/)

## Related

+ [Superglobal Variables](super-global.html)
+ [Variables](variable.html)
+ [Native](native.html)
+ [DIRECTORY\_SEPARATOR](directory_separator.html)
+ [New Line](new-line.html)
+ [Predefined Constants](predefined-constant.html)
