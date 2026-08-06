# Namespace Name
Namespaces names are strings of characters that can be used as namespaces names. Such names may be validated with the following regex: ``/^(?:[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff0-9]*)(?:\\[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff]*)*$/``.

In particular, namespaces names accept ``\`` character, and allows vast ranges of Unicode characters.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespace-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespace-name.html","name":"Namespace Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Namespaces names are strings of characters that can be used as namespaces names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Namespace Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

namespace A\B {}

namespace 我\是\PHP {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.rationale.php)**
## Related

+ [Namespaces](namespace.ini.html)
+ [Name](name.ini.html)
+ [Name Conventions](name-convention.ini.html)
