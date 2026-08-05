# Namespace Alias
PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces. 

This makes the code shorter, as the imported structure can be called with its alias name, instead of the fully qualified name. 

Aliasing solves naming conflicts, by giving another local name to any structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespace-alias.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespace-alias.ini.html","name":"Namespace Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Namespace Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Use Alias](use-alias.ini.html)
