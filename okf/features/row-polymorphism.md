---
type: "concept"
title: "Row Polymorphism"
description: "Row polymorphism is a type system feature that allows functions to be polymorphic over records or objects with an open set of fields."
resource: "https://en.wikipedia.org/wiki/Row_polymorphism"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Row Polymorphism

Row polymorphism is a type system feature that allows functions to be polymorphic over records or objects with an open set of fields. A function typed to accept ``{ name: string | r }`` accepts any record that has at least a ``name`` field of type ``string``, regardless of what other fields ``r`` might be. The ``r`` is called the row variable; it represents the remainder of the record's structure.

Row polymorphism enables structural typing for records without requiring an explicit declaration of subtype relationships. Two record types are compatible if one has at least the fields the other requires, regardless of whether any inheritance or interface relationship exists between them. Languages with row polymorphism include OCaml with the object types, PureScript, Elm, and TypeScript with structural typing for object literals.

PHP uses nominal typing. Two types are compatible only if one explicitly declares that it implements or extends the other. There is no structural compatibility between arbitrary class shapes.

The closest approximations are:

+ Interfaces: an interface specifies a subset of methods; any class implementing it is compatible, which is behavioral row polymorphism over methods.
+ Duck typing: calling a method without a type check relies on structural compatibility at runtime, with no static guarantee.
+ Array shapes: ``array{name: string, ...}`` in annotations approximates open row types for arrays, allowing static analysis to accept arrays with at least the declared keys.

None of these is full row polymorphism: interfaces cover methods only, not arbitrary properties, and array shape annotations apply to arrays, not objects.

```php
<?php

    // PHP approximation: interface as a behavioral row constraint
    interface HasName {
        public function getName(): string;
    }

    // Any class with getName() is accepted, regardless of other fields/methods
    function greet(HasName $entity): string {
        return 'Hello, ' . $entity->getName();
    }

    // Array shape approximation (annotation only, no runtime effect)
    /** @param array{name: string, ...} $record */
    function greetArray(array $record): string {
        return 'Hello, ' . $record['name'];
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Row_polymorphism](https://en.wikipedia.org/wiki/Row_polymorphism)

## See Also
- [TypeScript Handbook: Type Compatibility](https://www.typescriptlang.org/docs/handbook/type-compatibility.html)

## Related
- [Type System](/features/type-system.md)
- [Polymorphism](/features/polymorphism.md)
- [Interface](/features/interface.md)
- [Duck Typing](/features/ducktyping.md)
- [Generics](/features/generics.md)
- [Gradual Type Checking](/features/gradual-type-checking.md)
- [Structural Typing](/features/structural-typing.md)
- [Array Shape](/features/array-shape.md)

