# Sum Type
A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload. It is the OR half of algebraic data types, as distinct from product types which represent AND.

In Haskell: ``data Shape = Circle Double | Rectangle Double Double``. In Rust: ``enum Shape { Circle(f64), Rectangle(f64, f64) }``. In each language the case name acts as a tag, and the type system tracks which case is active, enabling exhaustive, type-safe dispatch.

PHP union types, such as ``int|string``, share the OR semantics but are not true sum types: they carry no tag, they do not associate different payloads with different arms, and ``match`` cannot decompose them structurally. PHP enums without backing are the closest PHP equivalent for pure tag-only sum types, but they cannot attach variant-specific associated data.

The standard PHP workaround is a sealed class hierarchy: an abstract base class with one concrete subclass per variant, each holding its own fields. ``instanceof`` checks and ``match`` on class strings approximate discriminated dispatch, but the compiler does not enforce exhaustiveness.

PHP does not suport sum types.
```php
<?php

    // PHP workaround: sealed class hierarchy as a sum type approximation
    abstract class Shape {}

    final class Circle extends Shape {
        public function __construct(public readonly float $radius) {}
    }

    final class Rectangle extends Shape {
        public function __construct(
            public readonly float $width,
            public readonly float $height,
        ) {}
    }

    function area(Shape $shape): float {
        return match (true) {
            $shape instanceof Circle    => M_PI * $shape->radius ** 2,
            $shape instanceof Rectangle => $shape->width * $shape->height,
            // PHP will not warn if a new subclass is added and not handled here
        };
    }

?>
```

## See Also

+ [PHP RFC: Sealed classes](https://wiki.php.net/rfc/sealed_classes)

Related : [Algebraic Data Type](Algebraic Data Type), [Generalized Algebraic Data Type (GADT)](Generalized Algebraic Data Type (GADT)), [Union Type](Union Type), [Enumeration (enum)](Enumeration (enum)), [Backed Enum](Backed Enum), [Pattern Matching](Pattern Matching), [Match](Match), [instanceof](instanceof), [Sealed Class](Sealed Class)
