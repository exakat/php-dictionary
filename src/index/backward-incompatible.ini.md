# Backward Incompatible
A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent.

For example, the function ``str_contains`` is backward incompatible, as it was introduced in version 8.0, and is not available in previous versions.

The keyword ``throw`` can be used within expressions since PHP 8.0. In older versions, ``throw`` was available, but needed to be an instruction on its own.

The contrary of a backward incompatible feature is forward compatible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backward-incompatible.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backward-incompatible.ini.html","name":"Backward Incompatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 08:32:14 +0000","dateModified":"Wed, 01 Jul 2026 08:32:14 +0000","description":"A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Backward Incompatible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    check() or throw new Exception('Check failed!');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Backward_compatibility)**
## Related

+ [Forward Compatible](forward-compatible.ini.html)
+ [Backward Compatible](backward-compatible.ini.html)
+ [Legacy](legacy.ini.html)
