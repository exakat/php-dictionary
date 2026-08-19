# Namespaces
Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program. They help organize and structure code, especially in larger projects where multiple developers may be contributing.

A namespace may not be called ``namespace``. Otherwise, its name follows the same regex as other PHP structures: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html","name":"Namespaces","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:49:41 +0000","dateModified":"Wed, 19 Aug 2026 06:49:41 +0000","description":"Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Namespaces.html"]}],"keywords":["namespace","naming","human names"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subnamespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domain.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/naming-conflict.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/prefix.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-module.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/module-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-visibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.rationale.php"},{"@type":"CreativeWork","name":"Understanding PHP Namespaces: Organising Your Code","url":"https:\/\/medium.com\/@bluznierca1\/understanding-php-namespaces-organising-your-code-ba2590c5e529"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"namespace"}]}]}</script>
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
