---
type: "concept"
title: "Module System with Explicit Exports"
description: "A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module; everything else defined inside stays private to it, without needing a separate ``private`` keyword on each symbol."
resource: "https://en.wikipedia.org/wiki/Modular_programming"
tags: ["concept", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Module System with Explicit Exports

A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module; everything else defined inside stays private to it, without needing a separate ``private`` keyword on each symbol. OCaml and Rust go further, using module signatures such as ``.mli`` files, ``pub`` visibility, to state exactly what a module offers, independently of how it is implemented internally.

This gives every file a hard, compiler-checked encapsulation boundary by default: an unexported helper function simply cannot be reached from outside, no matter how it is imported.

PHP's namespaces group names to avoid collisions, but they draw no boundary around a file's contents: every top-level function, class, or constant declared in a file is globally reachable through its fully qualified name as soon as the file is loaded, whether or not the author intended it to be used from outside. Restricting visibility is done member-by-member, with ``private``/``protected`` inside a class, not at the level of the file or namespace as a whole, so there is no PHP equivalent of an unexported, module-private top-level function.

```php
<?php

    namespace App\Utils;
    
    // Nothing marks this as internal: any file can still call App\Utils\helper().
    function helper(): void { /* ... */ }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Modular_programming](https://en.wikipedia.org/wiki/Modular_programming)

## See Also
- [Using modules in JavaScript](https://www.honeybadger.io/blog/javascript-modules-encapsulation/)
- [A Beginner's Guide to ES Modules in JavaScript](https://medium.com/womenintechnology/a-beginners-guide-to-es-modules-in-javascript-fc037f15e9a4)

## Related
- [Namespaces](/features/namespace.md)
- [Module](/features/module.md)
- [Visibility](/features/visibility.md)
- [Package-Level](/features/package-visibility.md)
- [First-Class Module](/features/first-class-module.md)

