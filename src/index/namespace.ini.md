# Namespaces
Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program. They help organize and structure code, especially in larger projects where multiple developers may be contributing.

A namespace may not be called ``namespace``. Otherwise, its name follows the same regex than other PHP structures: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespace.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/namespace.ini.html","name":"Namespaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Namespaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

namespace a {
    class x {
    }
}

namespace b {
    // a second class x, although distinct from the previous one
    class x {
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.rationale.php)**
## See Also

+ [Understanding PHP Namespaces: Organising Your Code](https://medium.com/@bluznierca1/understanding-php-namespaces-organising-your-code-ba2590c5e529)

## Related

+ [Use Alias](use-alias.ini.html)
+ [Fully Qualified Name](fully-qualified-name.ini.html)
+ [Subnamespaces](subnamespace.ini.html)
+ [Collision](collision.ini.html)
+ [global Scope](global.ini.html)
+ [Name](name.ini.html)
+ [Namespace Name](namespace-name.ini.html)
+ [Domain](domain.ini.html)
+ [include](include.ini.html)
+ [Name Conventions](name-convention.ini.html)
+ [Naming Conflict](naming-conflict.ini.html)
+ [Prefix](prefix.ini.html)
