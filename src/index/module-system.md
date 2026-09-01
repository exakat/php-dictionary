# Module System with Explicit Exports
A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module; everything else defined inside stays private to it, without needing a separate ``private`` keyword on each symbol. OCaml and Rust go further, using module signatures such as ``.mli`` files, ``pub`` visibility, to state exactly what a module offers, independently of how it is implemented internally.

This gives every file a hard, compiler-checked encapsulation boundary by default: an unexported helper function simply cannot be reached from outside, no matter how it is imported.

PHP's namespaces group names to avoid collisions, but they draw no boundary around a file's contents: every top-level function, class, or constant declared in a file is globally reachable through its fully qualified name as soon as the file is loaded, whether or not the author intended it to be used from outside. Restricting visibility is done member-by-member, with ``private``/``protected`` inside a class, not at the level of the file or namespace as a whole, so there is no PHP equivalent of an unexported, module-private top-level function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/module-system.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/module-system.html","name":"Module System with Explicit Exports","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's export function foo() or Python's __all__ list, are visible to code that imports the module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/module-system.html"]}],"keywords":["concept","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespace.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/module.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/package-visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/first-class-module.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Modular_programming"},{"@type":"CreativeWork","name":"Using modules in JavaScript","url":"https:\/\/www.honeybadger.io\/blog\/javascript-modules-encapsulation\/"},{"@type":"CreativeWork","name":"A Beginner's Guide to ES Modules in JavaScript","url":"https:\/\/medium.com\/womenintechnology\/a-beginners-guide-to-es-modules-in-javascript-fc037f15e9a4"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"module-system"}]}]}</script>
```php
<?php

    namespace App\Utils;
    
    // Nothing marks this as internal: any file can still call App\Utils\helper().
    function helper(): void { /* ... */ }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Modular_programming)**
## See Also

+ [Using modules in JavaScript](https://www.honeybadger.io/blog/javascript-modules-encapsulation/)
+ [A Beginner's Guide to ES Modules in JavaScript](https://medium.com/womenintechnology/a-beginners-guide-to-es-modules-in-javascript-fc037f15e9a4)

## Related

+ [Namespaces](namespace.html)
+ [Module](module.html)
+ [Visibility](visibility.html)
+ [Package-Level](package-visibility.html)
+ [First-Class Module](first-class-module.html)
