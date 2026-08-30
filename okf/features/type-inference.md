---
type: "type"
title: "Type Inference"
description: "Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration."
resource: "https://en.wikipedia.org/wiki/Type_inference"
tags: ["type", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Type Inference

Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration.

PHP itself does not infer types for local variables: their type can only be declared on function arguments, return values, properties, and constants. However, static analyzers perform type inference by tracking assignments, control-flow branches, and function signatures to determine what type a value holds at every point in the code.

Type inference enables early detection of type errors even in partially or untyped code. It is the engine behind gradual type checking: the tool fills the gaps left by missing annotations. PHPDoc blocks, ``@var``, ``@param``, ``@return``, are additional hints that guide inference when the code alone is ambiguous.

A classic example is narrowing: after an ``is_string()`` guard, the analyzer infers that the variable is a ``string`` inside the if-branch, removing false-positive warnings.

```php
<?php

    function process(mixed $value): string {
        if (is_string($value)) {
            // type inferred as string here
            return strtoupper($value);
        }
        // type inferred as int|float|bool|array|object|null here
        return (string) $value;
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Type_inference](https://en.wikipedia.org/wiki/Type_inference)

## See Also
- [Type Inference in PHP using Deep Learning](https://lup.lub.lu.se/luur/download?func=downloadFile&recordOId=9021447&fileOId=9021453)
- [Psalm – Typing in Psalm](https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/)
- [Narrowing types for static analysis](https://seld.be/notes/narrowing-types-for-static-analysis/)
- [Type inference for PHP](https://homepages.cwi.nl/~jurgenv/theses/RuudVanDerWeijde.pdf)

## Related
- [Type System](/features/type.md)
- [Type Juggling](/features/type-juggling.md)
- [Type Checking](/features/type-checking.md)
- [Gradual Type Checking](/features/gradual-type-checking.md)
- [Type Coverage](/features/type-coverage.md)
- [Dependent Type](/features/dependent-type.md)
- [Static Expression](/features/static-expression.md)
- [Union Type](/features/union-type.md)
- [Mixed](/features/mixed.md)
- [PHPdoc](/features/phpdoc.md)
- [Autocompletion](/features/autocompletion.md)

