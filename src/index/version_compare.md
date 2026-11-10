# version\_compare()
``version_compare()`` compares two version strings, and is the correct way to compare PHP or library versions. A plain string comparison gets ``'10.0' < '9.0'`` wrong, and a numeric comparison fails on versions such as ``'1.0.0-beta'``.

The function understands the usual version separators, such as ``.``, ``-``, ``_``, ``+``, and pre-release markers such as ``dev``, ``alpha``, ``beta``, ``RC`` and ``pl``. With two arguments, it returns ``-1``, ``0`` or ``1``. With an operator as third argument, ``<``, ``<=``, ``>``, ``>=``, ``==``, ``!=``, ``lt``, ``le``, ``gt``, ``ge``, ``eq``, ``ne``, it returns a boolean.

``version_compare()`` is available since PHP 4.0.7.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/version_compare.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/version_compare.html","name":"version_compare()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:51:28 +0000","dateModified":"Tue, 10 Nov 2026 11:51:28 +0000","description":"version_compare() compares two version strings, and is the correct way to compare PHP or library versions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/version_compare.html"]}],"keywords":["function","version"],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.version-compare.php"},{"@type":"CreativeWork","name":"PHP: Predefined Constants","url":"https:\/\/www.php.net\/manual\/en\/reserved.constants.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"version_compare"}]}]}</script>
```php
<?php

    version_compare('10.0.0', '9.0.0', '>'); // true
    version_compare('8.3.0', '8.3.0-RC1', '>'); // true, a release is after its RC
    version_compare(PHP_VERSION, '8.1.0', '>='); // check the running PHP version

?>
```

**[Documentation](https://www.php.net/manual/en/function.version-compare.php)**
## See Also

+ [PHP: Predefined Constants](https://www.php.net/manual/en/reserved.constants.php)

## Related

+ 
