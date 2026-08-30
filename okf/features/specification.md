---
type: "PHP Feature"
title: "Specification"
description: "A specification is a formal description of expected behaviour, constraints, or requirements."
resource: "https://en.wikipedia.org/wiki/Specification_pattern"
tags: ["ddd", "design pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Specification

A specification is a formal description of expected behaviour, constraints, or requirements. In software development, the term covers several contexts.

In the specification pattern, a Domain-Driven Design tactical pattern, a specification encapsulates a business rule as an object that can be combined with other specifications using logical operators, like AND, OR, NOT. This allows business rules to be reused, combined, and tested in isolation.

In a broader sense, a specification can refer to an API specification, such as ``OpenAPI``/``Swagger``, a language specification, such as the PHP language specification, a test specification, or an architecture decision record.

```php
<?php

    interface Specification
    {
        public function isSatisfiedBy(mixed $candidate): bool;
    }
    
    final class IsAdultUser implements Specification
    {
        public function isSatisfiedBy(mixed $candidate): bool
        {
            return $candidate instanceof User && $candidate->age >= 18;
        }
    }
    
    final class AndSpecification implements Specification
    {
        public function __construct(
            private readonly Specification $left,
            private readonly Specification $right,
        ) {}
    
        public function isSatisfiedBy(mixed $candidate): bool
        {
            return $this->left->isSatisfiedBy($candidate)
                && $this->right->isSatisfiedBy($candidate);
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Specification_pattern](https://en.wikipedia.org/wiki/Specification_pattern)

## See Also
- [Specifications by Eric Evans & Martin Fowler](https://martinfowler.com/apsupp/spec.pdf)

## Related
- [Domain Design Driven (DDD)](/features/ddd.md)
- [Design Pattern](/features/design-pattern.md)
- [Business Logic](/features/business-logic.md)
- [Validation](/features/validation.md)
- [Design By Contract (DBC)](/features/contract.md)
- [Swagger](/features/swagger.md)
- [Architectural Decision Record (ADR)](/features/adr.md)
- [Software Bill Of Material (SBOM)](/features/sbom.md)

## Details
- Packagist: [happyr/doctrine-specification](https://packagist.org/packages/happyr/doctrine-specification)

