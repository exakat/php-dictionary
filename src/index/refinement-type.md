# Refinement Type
A refinement type is a base type combined with a logical predicate that every value of that type must satisfy. Instead of just ``int``, a refinement type allows ``{ x: int | x > 0 }`` meaning a positive integer, or ``{ s: string | length(s) <= 255 }`` meaning a short string. The predicate is part of the type definition and is checked statically by the type system, not at runtime.

Refinement types shift constraint validation from runtime guards into the type system itself. A function accepting a ``PositiveInt`` can never be called with a negative number without a type error; the caller must prove the precondition, typically by producing a value through a smart constructor.

Languages with native or library-based refinement type support include Liquid Haskell, via SMT-solver-backed liquid types, F*, and some dependently-typed systems. TypeScript libraries such as ``io-ts`` and ``zod`` approximate refinements at the boundary layer.

PHP does not support refinement types. The closest approximations are:

+ Value objects with a constructor that throws on invalid input, enforcing the predicate at instantiation.
+ Psalm and PHPStan assertion annotations ``@psalm-assert positive-int $n`` which let static analysis track some refinements across control flow.
+ PHP 8.0 ``assert()`` in development mode for runtime checks.

None of these approaches enforces the predicate at the type system level in a way that is verified statically across all call sites.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refinement-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refinement-type.html","name":"Refinement Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:49:04 +0000","dateModified":"Mon, 13 Jul 2026 18:49:04 +0000","description":"A refinement type is a base type combined with a logical predicate that every value of that type must satisfy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Refinement Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"refinement-type"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Refinement_type)**
## See Also

+ [Liquid Haskell](https://ucsd-progsys.github.io/liquidhaskell/)

## Related

+ [Dependent Type](dependent-type.html)
+ [Type System](type-system.html)
+ [Type Checking](type-checking.html)
+ [Value Object](value-object.html)
+ [Type Invariant](invariant.html)
+ [Validation](validation.html)
+ [Gradual Type Checking](gradual-type-checking.html)
+ [Assertions](assertion.html)
