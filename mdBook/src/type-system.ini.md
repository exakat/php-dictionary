# Type System
A type system is a formal set of rules that assigns a type to every expression in a program and uses those types to determine which operations are valid, how values are stored, and what errors can be detected before or during execution. Type systems span a spectrum from loose and implicit to strict and expressive.

Key dimensions of a type system:

+ Static vs dynamic: static type checking happens before execution, as in C, Java, Rust, Haskell; dynamic type checking happens at runtime, as with Python, Ruby. A statically typed language catches type errors at compile time; a dynamically typed one catches them only when the erroneous operation is executed.
+ Strong vs weak: a strongly typed language refuses implicit coercions between incompatible types, as in Python, Rust; a weakly typed one performs automatic conversions, as in classic C, early PHP. Strength is orthogonal to static vs dynamic.
+ Nominal vs structural: nominal typing requires explicit declaration of type relationships, ``class Foo implements Bar``; structural typing, as in Go interfaces, TypeScript considers two types compatible if they share the same shape, regardless of declaration.
+ Sound vs unsound: a sound type system guarantees that well-typed programs never produce type errors at runtime. PHP's type system, even with strict_types, is unsound: ``mixed`` parameters, union types, and coercion paths leave runtime type errors possible.

PHP's type system has evolved significantly:

+ Pre-PHP 5: no type declarations; all typing is dynamic and implicit.
+ PHP 5: class and interface type hints on parameters; ``array`` and ``callable`` hints added in 5.1/5.4.
+ PHP 7.0: scalar type declarations, ``int``, ``float``, ``string``, ``bool``, return type declarations, ``declare(strict_types=1)``.
+ PHP 7.1: nullable types ``?Type``, ``void`` return type, ``iterable`` pseudo-type.
+ PHP 7.2: ``object`` type hint.
+ PHP 8.0: union types ``int|string``, ``mixed``, ``static`` return type, ``#[Attribute]`` for typed metadata, ``match`` with strict comparison.
+ PHP 8.1: intersection types ``Countable&Iterator``, ``never`` return type, ``readonly`` properties.
+ PHP 8.2: ``true``, ``false``, ``null`` as standalone types, DNF types ``(A&B)|C``, readonly classes.
+ PHP 8.3+: typed class constants, ``\Override`` attribute.

Static analysers add a richer layer of type inference and generics ``@template`` on top of PHP's native declarations, providing near-sound type checking as a development tool without changing runtime behaviour.
```php
<?php

declare(strict_types=1);

// Union type (PHP 8.0): parameter accepts int or string
function formatId(int|string $id): string {
    return (string) $id;
}

// Intersection type (PHP 8.1): must implement both interfaces
function processCollection(Countable&Iterator $col): void {
    foreach ($col as $item) { /* ... */ }
}

// Readonly property (PHP 8.1): immutable after construction
class Point {
    public function __construct(
        public readonly float $x,
        public readonly float $y,
    ) {}
}

// DNF type (PHP 8.2): (A&B)|null
interface Serializable {}
interface Loggable {}

function handle((Serializable&Loggable)|null $obj): void {
    if ($obj === null) return;
    // $obj is guaranteed to implement both interfaces here
}

// generic annotation (static analysis only, no runtime effect)
/** @template T of \DateTimeInterface */
class TimestampedCollection {
    /** @var list<T> */
    private array $items = [];

    /** @param T $item */
    public function add(mixed $item): void { $this->items[] = $item; }
}

?>
```

## See Also

+ [PHP type declarations](https://www.php.net/manual/en/language.types.declarations.php)
+ [PHPStan generics](https://phpstan.org/blog/generics-in-php-using-phpdocs)
+ [Psalm @template](https://psalm.dev/docs/annotating_code/templated_annotations/)

Related : [strict_types](strict_types), [Union Type](Union Type), [Intersection Type](Intersection Type), [Nullable](Nullable), [Generics](Generics), [Readonly](Readonly), [Template Metaprogramming (TMP)](Template Metaprogramming (TMP)), [Static Code Analysis (SCA)](Static Code Analysis (SCA)), [Algebraic Data Type](Algebraic Data Type), [Existential Type](Existential Type), [Generalized Algebraic Data Type (GADT)](Generalized Algebraic Data Type (GADT)), [Higher-Kinded Type](Higher-Kinded Type), [Linear Type](Linear Type), [Phantom Type](Phantom Type), [Refinement Type](Refinement Type), [Row Polymorphism](Row Polymorphism), [Semantic Analysis](Semantic Analysis), [Array Shape](Array Shape), [Effect System](Effect System), [Nominal Type](Nominal Type), [Structural Typing](Structural Typing), [Type Class](Type Class), [Type Narrowing](Type Narrowing), [Type Widening](Type Widening)
