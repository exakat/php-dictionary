# Sum Type
A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload. It is the OR half of algebraic data types, as distinct from product types which represent AND.

In Haskell: ``data Shape = Circle Double | Rectangle Double Double``. In Rust: ``enum Shape { Circle(f64), Rectangle(f64, f64) }``. In each language the case name acts as a tag, and the type system tracks which case is active, enabling exhaustive, type-safe dispatch.

PHP union types, such as ``int|string``, share the OR semantics but are not true sum types: they carry no tag, they do not associate different payloads with different arms, and ``match`` cannot decompose them structurally. PHP enums without backing are the closest PHP equivalent for pure tag-only sum types, but they cannot attach variant-specific associated data.

The standard PHP workaround is a sealed class hierarchy: an abstract base class with one concrete subclass per variant, each holding its own fields. ``instanceof`` checks and ``match`` on class strings approximate discriminated dispatch, but the compiler does not enforce exhaustiveness.

PHP does not support sum types.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html","name":"Sum Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:37:01 +0000","dateModified":"Thu, 13 Aug 2026 06:37:01 +0000","description":"A sum type is a type whose value is exactly one of a fixed set of cases, where each case may carry a different payload","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Sum Type.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sum-type"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Tagged_union)**
## See Also

+ [PHP RFC: Sealed classes](https://wiki.php.net/rfc/sealed_classes)

## Related

+ [Algebraic Data Type](algebraic-data-type.html)
+ [Generalized Algebraic Data Type (GADT)](gadt.html)
+ [Union Type](union-type.html)
+ [Enumeration (enum)](enum.html)
+ [Backed Enum](backed-enum.html)
+ [Pattern Matching](pattern-matching.html)
+ [Match](match.html)
+ [instanceof](instanceof.html)
+ [Sealed Class](sealed-class.html)
+ [Exhaustiveness](exhaustiveness.html)
+ [Option Type](option-type.html)
+ [Result Type](result-type.html)
+ [Structural Pattern Matching](structural-pattern-matching.html)
