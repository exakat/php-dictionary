# Namespaces
Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program. They help organize and structure code, especially in larger projects where multiple developers may be contributing.

A namespace may not be called ``namespace``. Otherwise, its name follows the same regex than other PHP structures: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html","name":"Namespaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Namespaces.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"namespace"}]}]}</script>
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

+ [Use Alias](use-alias.html)
+ [Fully Qualified Name](fully-qualified-name.html)
+ [Subnamespaces](subnamespace.html)
+ [Collision](collision.html)
+ [global Scope](global.html)
+ [Name](name.html)
+ [Namespace Name](namespace-name.html)
+ [Domain](domain.html)
+ [include](include.html)
+ [Name Conventions](name-convention.html)
+ [Naming Conflict](naming-conflict.html)
+ [Prefix](prefix.html)
+ [Absolute Name](absolute-name.html)
+ [First-Class Module](first-class-module.html)
+ [Module System with Explicit Exports](module-system.html)
+ [Package-Level](package-visibility.html)
