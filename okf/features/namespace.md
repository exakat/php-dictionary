---
type: "PHP Feature"
title: "Namespaces"
description: "Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program."
resource: "https://www.php.net/manual/en/language.namespaces.rationale.php"
tags: ["namespace", "naming", "human names"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Namespaces

Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program. They help organize and structure code, especially in larger projects where multiple developers may be contributing.

A namespace may not be called ``namespace``. Otherwise, its name follows the same regex as other PHP structures: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``.

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

## Documentation
- [https://www.php.net/manual/en/language.namespaces.rationale.php](https://www.php.net/manual/en/language.namespaces.rationale.php)

## See Also
- [Understanding PHP Namespaces: Organising Your Code](https://medium.com/@bluznierca1/understanding-php-namespaces-organising-your-code-ba2590c5e529)
- [Namespaces](https://phplang.org/spec/18-namespaces.html)

## Related
- [Use Alias](/features/use-alias.md)
- [Fully Qualified Name](/features/fully-qualified-name.md)
- [Subnamespaces](/features/subnamespace.md)
- [Collision](/features/collision.md)
- [global Scope](/features/global.md)
- [Name](/features/name.md)
- [Namespace Name](/features/namespace-name.md)
- [Domain](/features/domain.md)
- [include](/features/include.md)
- [Name Conventions](/features/name-convention.md)
- [Naming Conflict](/features/naming-conflict.md)
- [Prefix](/features/prefix.md)
- [Absolute Name](/features/absolute-name.md)
- [First-Class Module](/features/first-class-module.md)
- [Module System with Explicit Exports](/features/module-system.md)
- [Package-Level](/features/package-visibility.md)

## Details
- PHP since: 5.3

