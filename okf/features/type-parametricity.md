---
type: "type"
title: "Type Parametricity"
description: "Type parametricity, or parametric polymorphism, is the ability to write a function, class, or interface once and have it work uniformly over any type, with that type supplied as a parameter rather than hard-coded."
resource: "https://en.wikipedia.org/wiki/Parametric_polymorphism"
tags: ["type", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Type Parametricity

Type parametricity, or parametric polymorphism, is the ability to write a function, class, or interface once and have it work uniformly over any type, with that type supplied as a parameter rather than hard-coded. ``list<Order>`` and ``array<string, Money>`` describe the same shape as ``list<Animal>``: only the type parameter changes, the code that manipulates the list does not.

PHP has no native syntax for this. Every type declaration the engine understands, from class types to scalar types to DNF types, is checked at runtime, and a naive generics implementation would either need a full compilation step that verifies the parameter before execution, as Java and TypeScript do through type erasure, or it would need to check the parameter at every access, which the engine does not currently do.

In practice, PHP code expresses type parametricity today through a docblock type language, interpreted by tools such as ``PHPStan`` and ``Psalm`` rather than by the engine: ``@param list<Order> $orders``. This delivers most of the benefit of generics without a language change, at the cost of the check happening in a separate tool instead of the runtime. Proposals such as bound-erased generic types tried to bring the syntax into the language without the runtime check and were declined for breaking the invariant that a PHP type declaration is always enforced; a gradual, runtime-checked path starting with invariant type parameters on interfaces is being explored instead.

```php
<?php

    /**
     * @param list<Order> $orders
     * @return Money
     */
    function total(array $orders): Money
    {
        return array_reduce($orders, fn (Money $sum, Order $o) => $sum->add($o->total()), Money::zero());
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Parametric_polymorphism](https://en.wikipedia.org/wiki/Parametric_polymorphism)

## See Also
- [Bound Erased Generic Types](https://wiki.php.net/rfc/bound_erased_generic_types)

## Related
- [Generics](/features/generics.md)
- [Types Erasure](/features/type-erasure.md)
- [Covariance](/features/type-covariance.md)
- [Existential Type](/features/existential-type.md)
- [Row Polymorphism](/features/row-polymorphism.md)
- [Type System](/features/type-system.md)
- [Polymorphism](/features/polymorphism.md)
- [Docblock](/features/docblock.md)

