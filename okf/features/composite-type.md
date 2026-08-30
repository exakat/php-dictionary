---
type: "type"
title: "Composite Type"
description: "Composite types combine multiple types into a single type expression."
resource: "https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Composite Type

Composite types combine multiple types into a single type expression. PHP supports three forms of composite types:

+ Union types ``A|B``: the value must satisfy at least one of the listed types. Introduced in version 8.0, with ``catch`` clauses supporting multi-type syntax since PHP 7.1.
+ Intersection types ``A&B``: the value must satisfy all of the listed types simultaneously. Restricted to class and interface names. Introduced in version 8.1.
+ DNF types ``(A&B)|C``: disjunctive normal form, which combines intersections and unions. Introduced in version 8.2.

Composite types are accepted in parameter types, property types, and return types. ``catch`` clauses accept union types only. ``instanceof`` does not accept any composite form.

```php
<?php

    // Union type
    function foo(int|string $id): void {}
    
    // Intersection type
    function bar(Countable&Iterator $col): void {}
    
    // DNF type
    function baz((Countable&Iterator)|null $col): void {}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite](https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite)

## See Also
- [PHP RFC: Union Types 2.0](https://wiki.php.net/rfc/union_types_v2)
- [PHP RFC: Pure intersection types](https://wiki.php.net/rfc/pure-intersection-types)
- [PHP RFC: Disjunctive Normal Form Types](https://wiki.php.net/rfc/dnf_types)

## Related
- [Union Type](/features/union-type.md)
- [Intersection Type](/features/intersection-type.md)
- [Disjunctive Normal Form (DNF)](/features/dnf-type.md)
- [Named Type](/features/named-type.md)
- [Type System](/features/type.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Return Type](/features/return-type.md)
- [Parameter](/features/parameter.md)

## Details
- PHP since: 8.0

