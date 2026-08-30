---
type: "PHP Feature"
title: "Intersection Type"
description: "Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type."
resource: "https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection"
tags: ["types"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Intersection Type

Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type. The individual types are separated with the ``&`` operator.

The value typed with an intersection type must satisfy all the types at the same time.

Intersection types only accept class and interface types: scalars, ``int``, ``string``, ``bool``, etc., ``null``, ``false``, ``true``, and ``void`` are not allowed, as a single value cannot simultaneously be of two scalar types. Redundant types are also rejected: ``A&A`` is not valid.

Intersection types work well with polymorphism: an object that implements multiple interfaces satisfies an intersection type naturally.

PHP 8.2 introduced Disjunctive Normal Form, aka DNF, types, which combine intersection and union types, such as ``(A&B)|null``.

```php
<?php

    class X {
        // Property is of type A, B and C at the same time. 
        // Two of them have to be interfaces.
        private A & B & C $property;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection](https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection)

## See Also
- [How the New Intersection Types in PHP 8.1 Give You More Flexibility](https://www.howtogeek.com/devops/how-the-new-intersection-types-in-php-8-1-give-you-more-flexibility/)

## Related
- [Type System](/features/type.md)
- [Composite Type](/features/composite-type.md)
- [Disjunctive Normal Form (DNF)](/features/dnf-type.md)
- [Named Type](/features/named-type.md)
- [Relative Types](/features/relative-types.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Union Type](/features/union-type.md)
- [Interface](/features/interface.md)
- [Polymorphism](/features/polymorphism.md)
- [Nullable](/features/nullable.md)
- [Return Type](/features/return-type.md)
- [TypeError](/features/typeerror.md)

## Details
- PHP since: 8.1

