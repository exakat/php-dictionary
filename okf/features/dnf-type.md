---
type: "acronym"
title: "Disjunctive Normal Form (DNF)"
description: "``DNF`` stands for ``Disjunctive Normal Form``."
resource: "https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.composite.dnf"
tags: ["acronym", "type", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Disjunctive Normal Form (DNF)

``DNF`` stands for ``Disjunctive Normal Form``. It is a standard form used in propositional logic and Boolean algebra. DNF represents logical expressions as a disjunction ``OR`` of one or more conjunctions ``AND`` of literals. In simpler terms, it is a way to express logical statements using only the logical operators ``OR`` and ``AND``.

The ``DNF`` form allows for the representation of any logical expression using a combination of ``OR`` and ``AND`` operators. It is particularly useful in logic analysis, theorem proving, and boolean circuit design.

```php
<?php

    class X {
        private (A&B)|(C&D) $y;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.composite.dnf](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.composite.dnf)

## See Also
- [PHP RFC: Disjunctive Normal Form Types](https://wiki.php.net/rfc/dnf_types)
- [Disjunctive normal form](https://en.wikipedia.org/wiki/Disjunctive_normal_form)
- [DNF Types in PHP 8.2](https://lindevs.com/dnf-types-in-php-8-2)

## Related
- [And Operator](/features/and.md)
- [Type System](/features/type.md)
- [Composite Type](/features/composite-type.md)
- [Union Type](/features/union-type.md)
- [Intersection Type](/features/intersection-type.md)
- [Relative Types](/features/relative-types.md)
- [Property Type Declaration](/features/type-declaration-property.md)

## Details
- PHP since: 8.2

