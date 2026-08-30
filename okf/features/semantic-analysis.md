---
type: "static analysis"
title: "Semantic Analysis"
description: "Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed."
resource: "https://en.wikipedia.org/wiki/Semantic_analysis_(compilers)"
tags: ["analysis", "static analysis", "compiler"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Semantic Analysis

Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed. Where lexical analysis identifies tokens and parsing builds a syntax tree, semantic analysis verifies that the program makes sense according to the rules of the language.

Typical checks performed during semantic analysis include:

+ Type checking: verifying that values are used with compatible types
+ Scope resolution: ensuring that every identifier refers to a declared symbol
+ Arity checking: confirming that functions are called with the correct number of arguments
+ Constant folding: evaluating expressions whose values are known at compile time
+ Dead branch elimination: detecting conditions that are always true or always false

In static analysis, semantic analysis underpins the type inference and undefined-variable checks performed by tools.

```php
<?php

    function greet(string $name): string {
        return 'Hello, ' . $name;
    }
    
    // Semantic analysis detects the type mismatch: int passed where string is expected
    greet(42);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Semantic_analysis_(compilers)](https://en.wikipedia.org/wiki/Semantic_analysis_(compilers))

## See Also
- [Semantic Analysis in Compiler Design](https://www.geeksforgeeks.org/compiler-design/semantic-analysis-in-compiler-design/)

## Related
- [Analysis](/features/analysis.md)
- [Lexical Analysis](/features/lexical-analysis.md)
- [Abstract Syntactic Tree (AST)](/features/ast.md)
- [Type System](/features/type-system.md)
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)
- [Static Application Security Testing (SAST)](/features/sast.md)

## Details
- Packagist: [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
- Packagist: [vimeo/psalm](https://packagist.org/packages/vimeo/psalm)

