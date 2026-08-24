# PHP Native Function
PHP defines its own native functions. They are part of the core extensions, which are always compiled, or extensions. 

PHP native functions do not have a definition available, unlike component or custom functions. They are handled by the PHP engine, and documented.

For example, ``strlen`` is a PHP native function, which measures the length of a string, in bytes. There are a lot of PHP functions available.

PHP native functions may be disabled at startup, with the ``disabled_functions`` directive.

It is possible to reach PHP native function definitions on the php.net website by adding their name in the URL. For example: ``https://www.php.net/strlen``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-function.html","name":"PHP Native Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:50:53 +0000","dateModified":"Tue, 11 Aug 2026 20:50:53 +0000","description":"PHP defines its own native functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-function.html"]}],"keywords":["structure","syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/custom-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/canonical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-manual.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.functions.php"},{"@type":"CreativeWork","name":"PHP Safari: see how they are used in the wild","url":"https:\/\/php-safari.com\/"},{"@type":"CreativeWork","name":"php.net\/strlen","url":"https:\/\/www.php.net\/strlen"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-function"}]}]}</script>
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
