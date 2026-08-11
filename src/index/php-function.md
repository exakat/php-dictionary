# PHP Native Function
PHP defines its own native functions. They are part of the core extensions, which are always compiled, or extensions. 

PHP native function do not have a definition available, unlike component or custom functions. They are handled by the PHP engine, and documented.

For example, ``strlen`` is a PHP native function, which measures the length of a string, in bytes. There are a lot of PHP functions available.

PHP native interfaces may be disabled at startup, with the ``disabled_functions`` directive.

It is possible to reach PHP native function definitions on the php.net website by adding their name in the URL. For example: ``https://www.php.net/strlen``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-function.html","name":"PHP Native Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP defines its own native functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Native Function.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-function"}]}]}</script>
```php
<?php

    print_r(get_defined_functions());

?>
```

**[Documentation](https://www.php.net/manual/en/language.functions.php)**
## See Also

+ [PHP Safari: see how they are used in the wild](https://php-safari.com/)
+ [php.net/strlen](https://www.php.net/strlen)

## Related

+ [Functions](function.html)
+ [Custom Function](custom-function.html)
+ [Canonical](canonical.html)
+ [PHP Manual](php-manual.html)
