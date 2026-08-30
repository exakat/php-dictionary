---
type: "PHP Feature"
title: "Naming Conflict"
description: "A naming conflict appears when two structures of the same type are using the same name."
resource: "https://www.php.net/manual/en/language.namespaces.php"
tags: ["conflict", "name"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Naming Conflict

A naming conflict appears when two structures of the same type are using the same name.

This may lead to a fatal error, when the first defined structure has priority: this happens with functions, classes, etc.

It may also lead to overwriting, when the last structure can overwrite the first one. This approach is often silently executed, leading to late surprises. This is the case with array indices, variables, methods in class hierarchies, or arguments, in older versions of PHP.

Sometimes, PHP offers a mechanism to resolve conflicts. This is the case for methods in traits.

```php
<?php

    $a = 1;
    $a = 2; // $a is two, the first one is forgotten
    
    function foo() {}
    function foo() {} // Fatal error

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.php](https://www.php.net/manual/en/language.namespaces.php)

## See Also
- [Global Namespace Collision Detection in PHP](https://philsturgeon.com/global-namespace-class-collisions-in-php/)
- [Name collision - Wikipedia](https://en.wikipedia.org/wiki/Name_collision)

## Related
- [Name](/features/name.md)
- [Functions](/features/function.md)
- [Class](/features/class.md)
- [Namespaces](/features/namespace.md)
- [Name Conventions](/features/name-convention.md)

