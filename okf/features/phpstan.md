---
type: "PHP Feature"
title: "PHPStan"
description: "PHPStan is a static analysis tool for PHP that finds bugs without running the code, by reading the source, its type declarations, and its docblocks, and checking them for consistency."
resource: "https://phpstan.org/"
tags: ["tool", "development", "brand"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHPStan

PHPStan is a static analysis tool for PHP that finds bugs without running the code, by reading the source, its type declarations, and its docblocks, and checking them for consistency.

PHPStan is able to:

+ Detect type errors, such as calling a method that does not exist or passing the wrong type to a function
+ Understand the generics-like docblock type language, like ``list<Order>``, ``array<string, Money>``, used across the PHP ecosystem
+ Enforce increasingly strict checking through numbered rule levels
+ Be extended with custom rules and framework-specific extensions
+ Run in continuous integration to catch regressions before deployment.

## Documentation
- [https://phpstan.org/](https://phpstan.org/)

## See Also
- [PHPStan rule levels](https://phpstan.org/user-guide/rule-levels)

## Related
- [Psalm](/features/psalm.md)
- [Docblock](/features/docblock.md)
- [Type Checking](/features/type-checking.md)
- [Type Parametricity](/features/type-parametricity.md)
- [Continuous Integration (CI)](/features/ci.md)
- [Linting](/features/linting.md)

## Details
- Packagist: [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)

