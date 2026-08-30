---
type: "static analysis"
title: "Analysis"
description: "Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding."
tags: ["quality", "tooling", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Analysis

Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding.

Static analysis examines code without executing it. Tools such as ``PHPStan``, ``Psalm``, ``Mago`` and ``Phan`` inspect PHP source files for type errors, undefined variables, dead code, and security vulnerabilities. Exakat is a static analyser specifically designed for PHP, able to audit large codebases and enforce rules across many categories.

Dynamic analysis examines code during execution. It covers profiling, fuzzing, mutation testing, and runtime error detection.

Architectural analysis focuses on the relationships between components, coupling, cohesion, and adherence to intended design patterns.

```php
<?php

    // Running static analysis from PHP (e.g., as part of a CI pipeline)
    $output    = [];
    $exitCode  = 0;
    exec('vendor/bin/phpstan analyse src --level=8 --no-progress', $output, $exitCode);
    
    if ($exitCode !== 0) {
        echo implode(PHP_EOL, $output);
        exit($exitCode);
    }

?>
```

## See Also
- [PHPStan](https://phpstan.org/)
- [Psalm](https://psalm.dev/)
- [Exakat](https://www.exakat.io/)
- [Mago](https://mago.carthage.software/1.45.0/en/)
- [Top 7 Methods, Pros/Cons and Best Practices](https://www.oligo.security/academy/static-code-analysis)

## Related
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Abstract Syntactic Tree (AST)](/features/ast.md)
- [Metrics](/features/metrics.md)
- [Quality](/features/quality.md)
- [Code Review](/features/code-review.md)
- [Continuous Integration (CI)](/features/ci.md)
- [Dead Code](/features/dead-code.md)
- [Type Coverage](/features/type-coverage.md)
- [Code Inventory](/features/inventory.md)
- [Static Code Analysis (SCA)](/features/sca.md)
- [Tool](/features/tool.md)
- [Lexical Analysis](/features/lexical-analysis.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)
- [Linting](/features/linting.md)

## Details
- Packagist: [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
- Packagist: [vimeo/psalm](https://packagist.org/packages/vimeo/psalm)
- Packagist: [phan/phan](https://packagist.org/packages/phan/phan)

