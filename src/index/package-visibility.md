# Package-Level
Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it. It lets a library share implementation details across its own files without exposing them as part of its public API.

This gives a third, coarser-grained boundary than the usual class-based ``private``/``protected`` pair: visibility scoped to a whole group of files that ship and evolve together, rather than to a single class and its subclasses.

Package level is also called internal visibility.

PHP's visibility modifiers, ``public``, ``protected``, and ``private``, are all scoped to the class hierarchy, never to a namespace, directory, or package. There is no modifier that means visible within this namespace, or within this Composer package, but not outside it; a symbol is either fully public to any caller that can reach its fully qualified name, or restricted to the declaring class and its subclasses.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-visibility.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-visibility.html","name":"Package-Level","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:04:49 +0000","dateModified":"Mon, 20 Jul 2026 17:04:49 +0000","description":"Package-level, or internal, visibility is an access modifier that sits between public and private: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s internal, is reachable from any code within the same package, module, or compiled assembly, but not from outside it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Package-Level.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"package-visibility"}]}]}</script>
```php
<?php

    namespace App\Billing;
    
    class Invoice {
        // No modifier means reachable only from App\\Billing in Java;
        // in PHP, only public, protected, and private exist, all class-scoped.
        public function total(): float { /* ... */ }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Access_modifiers)**
## Related

+ [Visibility](visibility.html)
+ [Public Visibility](public.html)
+ [Private Visibility](private.html)
+ [Protected Visibility](protected.html)
+ [Namespaces](namespace.html)
+ [Module System with Explicit Exports](module-system.html)
