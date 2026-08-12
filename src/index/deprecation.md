# Deprecation
Deprecation is the state of a feature which is still available, but not recommended anymore. The next stage of life for the feature is the removal, usually in a major release.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html","name":"Deprecation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Deprecation is the state of a feature which is still available, but not recommended anymore","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Deprecation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deprecation"}]}]}</script>
```php
<?php

1 ? 2 : 3 ? 4 : 5;   // deprecated in PHP 7.4, removed in PHP 8.0
(1 ? 2 : 3) ? 4 : 5; // ok

?>
```

**[Documentation](https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary)**
## Related

+ [Deprecated](deprecated.html)
+ [Fatal Error](fatal-error.html)
+ [String Increment](string-increment.html)
+ [Sunsetting](sunsetting.html)
