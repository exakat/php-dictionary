---
type: "acronym"
title: "Static Code Analysis (SCA)"
description: "Static code analysis, or SCA or static analysis, analyzes the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc."
resource: "https://en.wikipedia.org/wiki/Static_program_analysis"
tags: ["acronym", "tool", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Code Analysis (SCA)

Static code analysis, or SCA or static analysis, analyzes the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc. 

PHP includes static code analysis, by reporting a wide range of errors before executing the code, at linting time. Then, the other errors are reported at execution time. SCA works in-between these two phases: after the code compiles, but before it is executed. 

SCA is usually invoked manually, during development time, at commit time, to avoid pushing incorrect code, and in CI/CD pipelines, to ensure it was correctly run.

## Documentation
- [https://en.wikipedia.org/wiki/Static_program_analysis](https://en.wikipedia.org/wiki/Static_program_analysis)

## See Also
- [How to Perform Static Code Analysis in PHP?](https://www.geeksforgeeks.org/php/how-to-perform-static-code-analysis-in-php/)

## Related
- [Analysis](/features/analysis.md)
- [Audit](/features/audit.md)
- [Autocompletion](/features/autocompletion.md)
- [Static Single Assignment Form (SSA)](/features/ssa.md)
- [Tool](/features/tool.md)
- [Type Checking](/features/type-checking.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [PHPStan](/features/phpstan.md)
- [Psalm](/features/psalm.md)
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)
- [Docblock](/features/docblock.md)
- [Linting](/features/linting.md)
- [Continuous Integration (CI)](/features/ci.md)

## Details
- Packagist: [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
- Packagist: [phan/phan](https://packagist.org/packages/phan/phan)
- Packagist: [psalm/psalm](https://packagist.org/packages/psalm/psalm)
- Packagist: [exakat/exakat](https://packagist.org/packages/exakat/exakat)
- Packagist: [mago/mago](https://packagist.org/packages/mago/mago)

