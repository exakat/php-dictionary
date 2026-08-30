---
type: "concept"
title: "Package-Level"
description: "Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``."
resource: "https://en.wikipedia.org/wiki/Access_modifiers"
tags: ["concept", "not-supported", "visibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Package-Level

Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``. A member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it. It lets a library share implementation details across its own files without exposing them as part of its public API.

This gives a third, coarser-grained boundary than the usual class-based ``private``/``protected`` pair: visibility scoped to a whole group of files that ship and evolve together, rather than to a single class and its subclasses.

Package level is also called internal visibility.

PHP's visibility modifiers, ``public``, ``protected``, and ``private``, are all scoped to the class hierarchy, never to a namespace, directory, or package. There is no modifier that means visible within this namespace, or within this Composer package, but not outside it; a symbol is either fully public to any caller that can reach its fully qualified name, or restricted to the declaring class and its subclasses.

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

## Documentation
- [https://en.wikipedia.org/wiki/Access_modifiers](https://en.wikipedia.org/wiki/Access_modifiers)

## See Also
- [Visibility modifiers | Kotlin Documentation](https://kotlinlang.org/docs/visibility-modifiers.html)
- [Kotlin Visibility Modifiers - public, protected, internal, private](https://www.digitalocean.com/community/tutorials/kotlin-visibility-modifiers-public-protected-internal-private)

## Related
- [Visibility](/features/visibility.md)
- [Public Visibility](/features/public.md)
- [Private Visibility](/features/private.md)
- [Protected Visibility](/features/protected.md)
- [Namespaces](/features/namespace.md)
- [Module System with Explicit Exports](/features/module-system.md)

