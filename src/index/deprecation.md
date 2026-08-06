# Deprecation
Deprecation is the state of a feature which is still available, but not recommended anymore. The next stage of life for the feature is the removal, usually in a major release.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deprecation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deprecation.html","name":"Deprecation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Deprecation is the state of a feature which is still available, but not recommended anymore","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Deprecation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

1 ? 2 : 3 ? 4 : 5;   // deprecated in PHP 7.4, removed in PHP 8.0
(1 ? 2 : 3) ? 4 : 5; // ok

?>
```

**[Documentation](https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary)**
## Related

+ [Deprecated](deprecated.ini.html)
+ [Fatal Error](fatal-error.ini.html)
+ [String Increment](string-increment.ini.html)
+ [Sunsetting](sunsetting.ini.html)
