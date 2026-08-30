---
type: "concept"
title: "Nominal Type"
description: "Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape."
resource: "https://en.wikipedia.org/wiki/Nominal_type_system"
tags: ["concept", "type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Nominal Type

Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape. It is the opposite of structural typing, where compatibility is decided by shape alone, without any explicit declaration.

PHP's type system is nominal: a class only satisfies a type if it is declared with ``extends`` or ``implements``, even when another, unrelated class already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes; the closest it comes to structural typing is duck typing at runtime.

Nominal typing is the norm among mainstream class-based languages, such as PHP, Java, C# and C++. It favors explicitness and intent over flexibility: a class cannot accidentally satisfy an interface it was never meant to implement.

```php
<?php

    interface Greeter {
        public function greet(): string;
    }

    class Person implements Greeter { // explicit, nominal declaration
        public function greet(): string {
            return 'Hello';
        }
    }

    function sayHello(Greeter $g) {
        echo $g->greet();
    }

    sayHello(new Person()); // OK, Person is nominally declared as a Greeter

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Nominal_type_system](https://en.wikipedia.org/wiki/Nominal_type_system)

## See Also
- [Type Systems: Structural vs. Nominal typing explained](https://medium.com/@thejameskyle/type-systems-structural-vs-nominal-typing-explained-56511dd969f4)
- [Nominal & Structural Typing | Flow](https://flow.org/en/docs/lang/nominal-structural/)

## Related
- [Structural Typing](/features/structural-typing.md)
- [Type System](/features/type-system.md)
- [Interface](/features/interface.md)
- [Type Checking](/features/type-checking.md)
- [Polymorphism](/features/polymorphism.md)

