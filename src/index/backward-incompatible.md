# Backward Incompatible
A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent.

For example, the function ``str_contains`` is backward incompatible, as it was introduced in version 8.0, and is not available in previous versions.

The keyword ``throw`` can be used within expressions since PHP 8.0. In older versions, ``throw`` was available, but needed to be an instruction on its own.

The contrary of a backward incompatible feature is forward compatible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-incompatible.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-incompatible.html","name":"Backward Incompatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 08:32:14 +0000","dateModified":"Wed, 01 Jul 2026 08:32:14 +0000","description":"A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Backward Incompatible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Backward Incompatible"}]}]}</script>
```php
<?php

    check() or throw new Exception('Check failed!');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Backward_compatibility)**
## Related

+ [Forward Compatible](forward-compatible.html)
+ [Backward Compatible](backward-compatible.html)
+ [Legacy](legacy.html)
