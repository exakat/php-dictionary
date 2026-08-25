# Backward Incompatible
A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent.

For example, the function ``str_contains`` is backward incompatible, as it was introduced in version 8.0, and is not available in previous versions.

The keyword ``throw`` can be used within expressions since PHP 8.0. In older versions, ``throw`` was available, but needed to be an instruction on its own.

The contrary of a backward incompatible feature is forward compatible.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-incompatible.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-incompatible.html","name":"Backward Incompatible","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-incompatible.html"]}],"keywords":["compatibility"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/forward-compatible.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-compatible.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/legacy.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Backward_compatibility"},{"@type":"CreativeWork","name":"PHP Breaks Backwards Compatibility","url":"https:\/\/thephp.cc\/articles\/php-breaks-backwards-compatibility"},{"@type":"CreativeWork","name":"PHP: Backward incompatible changes","url":"https:\/\/www.php.net\/manual\/en\/migration70.incompatible.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backward-incompatible"}]}]}</script>
```php
<?php

    check() or throw new Exception('Check failed!');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Backward_compatibility)**
## See Also

+ [PHP Breaks Backwards Compatibility](https://thephp.cc/articles/php-breaks-backwards-compatibility)
+ [PHP: Backward incompatible changes](https://www.php.net/manual/en/migration70.incompatible.php)

## Related

+ [Forward Compatible](forward-compatible.html)
+ [Backward Compatible](backward-compatible.html)
+ [Legacy](legacy.html)
