---
type: "keyword"
title: "Const"
description: "``const`` is a PHP keyword, that creates constant definitions."
resource: "https://www.php.net/manual/en/control-structures.alternative-syntax.php"
tags: ["keyword", "constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Const

``const`` is a PHP keyword, that creates constant definitions. 

``const`` is allowed inside classes, interfaces, enumerations and traits, to create static constants. ``const`` is also allowed in the global scope, to create global constants. 

``const`` is only allowed in the body of a classes, interfaces, enumerations and traits, and the first level of a main file. It is not possible to create conditioned constants with a if-then structure and const: this requires an include.

```php
<?php if ($a == 5): ?>
A is equal to 5
<?php endif; ?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.alternative-syntax.php](https://www.php.net/manual/en/control-structures.alternative-syntax.php)

## See Also
- [PHP: Class Constants](https://www.php.net/manual/en/language.oop5.constants.php)
- [define](https://www.php.net/manual/en/function.define.php)

## Related
- [Class](/features/class.md)
- [Trait](/features/trait.md)
- [define()](/features/define.md)
- [defined()](/features/defined.md)
- [Conditioned Structures](/features/conditioned.md)
- [include](/features/include.md)
- [Conditional](/features/conditional.md)
- [Execution Time](/features/execution-time.md)
- [Compile-time Evaluation](/features/compile-time-evaluation.md)
- [Lvalue](/features/lvalue.md)
- [Macro](/features/macro.md)
- [Template Metaprogramming (TMP)](/features/template-metaprogramming.md)

