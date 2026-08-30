---
type: "type"
title: "Type System"
description: "Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties."
resource: "https://www.php.net/manual/en/language.types.declarations.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Type System

Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties. They ensure that the value is of the specified type at call time, otherwise a ``TypeError`` is thrown.

```php
<?php

function foo(A $a) : void {}

class x {
    private A $p;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php](https://www.php.net/manual/en/language.types.declarations.php)

## See Also
- [Explore Your Types](https://backendtea.com/post/explore-your-types/)
- [Narrowing types for static analysis](https://seld.be/notes/narrowing-types-for-static-analysis/)
- [PHP Oddities](https://flowtwo.io/post/php's-oddities)
- [Types](https://phplang.org/spec/05-types.html)

## Related
- [Disjunctive Normal Form (DNF)](/features/dnf-type.md)
- [False](/features/false.md)
- [Mixed](/features/mixed.md)
- [Never Type](/features/never.md)
- [Nullable](/features/nullable.md)
- [Object](/features/object.md)
- [Properties](/features/property.md)
- [Return Type](/features/return-type.md)
- [strict_types](/features/strict_types.md)
- [True](/features/true.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Typed Property](/features/typed-property.md)
- [Intersection Type](/features/intersection-type.md)
- [Object Type](/features/object-type.md)
- [Scalar Types](/features/scalar-type.md)
- [Special Types](/features/special-typehint.md)
- [Union Type](/features/union-type.md)
- [Variables](/features/variable.md)
- [Autowiring](/features/autowiring.md)
- [Propagation](/features/propagation.md)
- [Pseudo-type](/features/pseudo-type.md)
- [Type Coverage](/features/type-coverage.md)
- [Dependent Type](/features/dependent-type.md)
- [Gradual Type Checking](/features/gradual-type-checking.md)
- [Relative Types](/features/relative-types.md)
- [Standalone Types](/features/standalone-type.md)
- [Autocompletion](/features/autocompletion.md)
- [Question Mark ?](/features/question-mark.md)
- [resource](/features/resource.md)
- [Types Erasure](/features/type-erasure.md)
- [Type Inference](/features/type-inference.md)
- [Alias Types](/features/alias-types.md)

## Details
- PHP since: 7.0

