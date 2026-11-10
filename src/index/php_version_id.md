# PHP\_VERSION\_ID
``PHP_VERSION_ID`` is a predefined integer constant holding the version of the running PHP interpreter, encoded as ``major * 10000 + minor * 100 + release``. For example, PHP 8.3.0 gives ``80300`` and PHP 7.4.33 gives ``70433``.

Because it is a single integer, it can be compared directly with ``>=`` to test the PHP version, without parsing ``PHP_VERSION``. Each component is two digits, so the encoding stays ordered for comparison as long as the minor and release numbers stay below 100.

The constant is available since PHP 5.2.7. Before that, only the string ``PHP_VERSION`` was available.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_version_id.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_version_id.html","name":"PHP_VERSION_ID","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:40:42 +0000","dateModified":"Tue, 10 Nov 2026 11:40:42 +0000","description":"PHP_VERSION_ID is a predefined integer constant holding the version of the running PHP interpreter, encoded as major * 10000 + minor * 100 + release","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_version_id.html"]}],"keywords":["constant","version"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/version_compare.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.constants.php"},{"@type":"CreativeWork","name":"PHP: Predefined Constants","url":"https:\/\/www.php.net\/manual\/en\/reserved.constants.php"},{"@type":"CreativeWork","name":"PHP: phpversion","url":"https:\/\/www.php.net\/manual\/en\/function.phpversion.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php_version_id"}]}]}</script>
```php
<?php

    // Requires PHP 8.0 or later
    if (PHP_VERSION_ID >= 80000) {
        // use constructor property promotion, union types, ...
    }

    echo PHP_VERSION_ID; // 80300 on PHP 8.3.0

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [PHP: Predefined Constants](https://www.php.net/manual/en/reserved.constants.php)
+ [PHP: phpversion](https://www.php.net/manual/en/function.phpversion.php)

## Related

+ [version\_compare()](version_compare.html)
