# Namespace Alias
PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces. 

This makes the code shorter, as the imported structure can be called with its alias name, instead of the fully qualified name. 

Aliasing solves naming conflicts, by giving another local name to any structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-alias.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-alias.html","name":"Namespace Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Namespace Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"namespace-alias"}]}]}</script>
```php
<?php

namespace a {
    class x {
    }
}

namespace b {
    use a\x as aX;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## Related

+ [Use Alias](use-alias.html)
