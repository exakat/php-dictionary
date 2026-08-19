# Namespace Name
Namespaces names are strings of characters that can be used as namespaces names. Such names may be validated with the following regex: ``/^(?:[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff0-9]*)(?:\\[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff]*)*$/``.

In particular, namespaces names accept ``\`` character, and allows vast ranges of Unicode characters.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-name.html","name":"Namespace Name","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Namespaces names are strings of characters that can be used as namespaces names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Namespace Name.html"]}],"keywords":["naming"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.rationale.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"namespace-name"}]}]}</script>
```php
<?php

namespace A\B {}

namespace 我\是\PHP {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.rationale.php)**
## Related

+ [Namespaces](namespace.html)
+ [Name](name.html)
+ [Name Conventions](name-convention.html)
