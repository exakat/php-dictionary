---
type: "concept"
title: "Phantom Type"
description: "A phantom type is a generic type that carries a type parameter which does not appear in the runtime representation of the value."
resource: "https://wiki.haskell.org/Phantom_type"
tags: ["concept", "type", "not-supported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Phantom Type

A phantom type is a generic type that carries a type parameter which does not appear in the runtime representation of the value. The parameter exists only at the type-checking level, adding information that guides the static analyser without any runtime cost.

The classic use case is encoding state in the type. A ``Connection<Closed>`` and a ``Connection<Open>`` have identical runtime structure but different static types, so calling ``query()`` on a closed connection becomes a compile-time error rather than a runtime exception. The phantom parameter ``Closed`` or ``Open`` holds no data; it is purely a type-level marker.

Phantom types are a lightweight alternative to dependent types for expressing invariants that can be tracked statically. They are used in Haskell, Rust, zero-sized marker types, and TypeScript, branded types via ``& { readonly __brand: 'USD' }``.

PHP does not support phantom types natively. Generic type parameters are not a language feature. However, a partial simulation is possible using PHPStan or Psalm template annotations for static analysis purposes only, with no runtime enforcement. Branded value objects achieve a similar discrimination effect at the cost of wrapping every value in an object.

```php
<?php

    // PHP approximation using PHPStan @template (static analysis only, no runtime effect)

    /**
     * @template TStatus
     */
    final class Connection {
        public function __construct(private readonly \PDO $pdo) {}
    }

    /** @return Connection<'open'> */
    function openConnection(string $dsn): Connection {
        return new Connection(new \PDO($dsn));
    }

    /**
     * @param Connection<'open'> $conn
     */
    function query(Connection $conn, string $sql): array {
        // PHPStan will warn if a Connection<'closed'> is passed
        return [];
    }

?>
```

## Documentation
- [https://wiki.haskell.org/Phantom_type](https://wiki.haskell.org/Phantom_type)

## See Also
- [Phantom Types in TypeScript: Stop Mixing Kilograms and Pounds at Compile Time](https://dev.to/gabrielanhaia/phantom-types-in-typescript-stop-mixing-kilograms-and-pounds-at-compile-time-iem)
- [Phantom types in Swift | Swift with Majid](https://swiftwithmajid.com/2021/02/18/phantom-types-in-swift/)

## Related
- [Generics](/features/generics.md)
- [Type System](/features/type-system.md)
- [Type Checking](/features/type-checking.md)
- [Gradual Type Checking](/features/gradual-type-checking.md)
- [Value Object](/features/value-object.md)
- [Dependent Type](/features/dependent-type.md)
- [Immutable](/features/immutable.md)

