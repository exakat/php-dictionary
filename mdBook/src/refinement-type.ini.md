# Refinement Type
A refinement type is a base type combined with a logical predicate that every value of that type must satisfy. Instead of just ``int``, a refinement type allows ``{ x: int | x > 0 }`` meaning a positive integer, or ``{ s: string | length(s) <= 255 }`` meaning a short string. The predicate is part of the type definition and is checked statically by the type system, not at runtime.

Refinement types shift constraint validation from runtime guards into the type system itself. A function accepting a ``PositiveInt`` can never be called with a negative number without a type error; the caller must prove the precondition, typically by producing a value through a smart constructor.

Languages with native or library-based refinement type support include Liquid Haskell, via SMT-solver-backed liquid types, F*, and some dependently-typed systems. TypeScript libraries such as ``io-ts`` and ``zod`` approximate refinements at the boundary layer.

PHP does not support refinement types. The closest approximations are:

+ Value objects with a constructor that throws on invalid input, enforcing the predicate at instantiation.
+ Psalm and PHPStan assertion annotations ``@psalm-assert positive-int $n`` which let static analysis track some refinements across control flow.
+ PHP 8.0 ``assert()`` in development mode for runtime checks.

None of these approaches enforces the predicate at the type system level in a way that is verified statically across all call sites.
```php
<?php

    // PHP approximation: smart constructor enforcing the predicate at runtime
    final class PositiveInt {
        public readonly int $value;

        private function __construct(int $value) {
            if ($value <= 0) {
                throw new \InvalidArgumentException('Must be positive');
            }
            $this->value = $value;
        }

        public static function of(int $value): self {
            return new self($value);
        }
    }

    function divide(int $dividend, PositiveInt $divisor): float {
        return $dividend / $divisor->value;
    }

?>
```

## See Also

+ [Liquid Haskell](https://ucsd-progsys.github.io/liquidhaskell/)

Related : [Dependent Type](Dependent Type), [Type System](Type System), [Type Checking](Type Checking), [Value Object](Value Object), [Type Invariant](Type Invariant), [Validation](Validation), [Gradual Type Checking](Gradual Type Checking), [Assertions](Assertions)
