---
type: "PHP Feature"
title: "Property Type Declaration"
description: "Type declaration property, also known as typed properties, is a feature introduced in version 7.4 that allows specifying the type of a class property."
resource: "https://www.php.net/manual/en/language.types.declarations.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Property Type Declaration

Type declaration property, also known as typed properties, is a feature introduced in version 7.4 that allows specifying the type of a class property.

With typed properties, the type of a property is explicitly defined, ensuring that only values of the specified type can be assigned to that property. This helps enforce type safety and prevents accidental assignments of incompatible values.

Typed properties support any type format: simple, union, intersection or DNF. Nullable types are expressed with a leading ``?``, such as ``?string``.

A typed property that has not been initialized before it is read triggers an ``Error`` exception. Typed properties must be explicitly assigned before use, either in the constructor or at the declaration site.

Since PHP 8.1, typed properties may also be declared ``readonly``, which prevents any assignment after the initial one.

```php
<?php

    class X {
        private Typed $y;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php](https://www.php.net/manual/en/language.types.declarations.php)

## See Also
- [PHP RFC: Typed Properties 2.0](https://wiki.php.net/rfc/typed_properties_v2)

## Related
- [Type System](/features/type.md)
- [Union Type](/features/union-type.md)
- [Intersection Type](/features/intersection-type.md)
- [Disjunctive Normal Form (DNF)](/features/dnf-type.md)
- [Readonly](/features/readonly.md)
- [Nullable](/features/nullable.md)
- [Properties](/features/property.md)
- [Uninitialized](/features/uninitialized.md)
- [TypeError](/features/typeerror.md)
- [Return Type](/features/return-type.md)
- [Promoted Properties](/features/promoted-property.md)
- [Property Hook](/features/property-hook.md)
- [Asymmetric Visibility](/features/asymmetric-visibility.md)
- [static](/features/static.md)
- [Var](/features/var.md)

## Details
- PHP since: 7.4

