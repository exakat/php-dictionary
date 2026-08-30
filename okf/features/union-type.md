---
type: "type"
title: "Union Type"
description: "Union types refer to the ability to specify multiple possible types for a property, parameter, or return value."
resource: "https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union"
tags: ["feature", "type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Union Type

Union types refer to the ability to specify multiple possible types for a property, parameter, or return value. It allows a property or parameter to accept values of different types. It allows a method or function to return values of different types. Union types were introduced in version 8.0.

Before PHP 8, a type declaration could only have a single type, except for the null type. Nowadays, with union types, the code can declare multiple types by separating them with a pipe ``|`` symbol. 

Union types were introduced for exception catching, before PHP 8.

```php
<?php

    class X {
        private A | B | C $property;
    }
    
    try {
    
    } catch (A|B|C $e) {
    
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union)

## See Also
- [What are union types and how do you use them in PHP?](https://www.educative.io/answers/what-are-union-types-and-how-do-you-use-them-in-php)

## Related
- [Type System](/features/type.md)
- [Composite Type](/features/composite-type.md)
- [Alias Types](/features/alias-types.md)
- [Disjunctive Normal Form (DNF)](/features/dnf-type.md)
- [Literal Types](/features/literal-types.md)
- [Relative Types](/features/relative-types.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Intersection Type](/features/intersection-type.md)
- [Named Type](/features/named-type.md)
- [Type Inference](/features/type-inference.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [Duplicate](/features/duplicate.md)
- [Sum Type](/features/sum-type.md)
- [Type System](/features/type-system.md)

## Details
- PHP since: 8.0

