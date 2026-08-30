---
type: "static analysis"
title: "Pattern-Based Analysis"
description: "Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution."
resource: "https://www.geeksforgeeks.org/machine-learning/types-of-algorithms-in-pattern-recognition/"
tags: ["analysis", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pattern-Based Analysis

Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution.

Each pattern describes a structural or textual signature that corresponds to a coding mistake, a security vulnerability, or a style violation. When the pattern matches, a finding is reported.

Pattern-based analysis is:

+ Fast to implement and run, because it requires only a token stream or a partial AST
+ Easy to extend, because new patterns can be added without modifying the analyser core
+ Limited in depth, because it cannot reason about data flow, aliasing, or runtime state

Common uses include detecting calls to deprecated functions, flagging unsafe functions such as ``eval()``, ``exec()``, enforcing naming conventions, and finding trivially injected values.

Exakat uses pattern-based analysis for many of its rules, alongside deeper analyses.

```php
<?php

    // Pattern-based analysis can flag the use of eval() regardless of context
    $code = $_GET['snippet'] ?? '';
    eval($code); // flagged by pattern: use of eval()

?>
```

## Documentation
- [https://www.geeksforgeeks.org/machine-learning/types-of-algorithms-in-pattern-recognition/](https://www.geeksforgeeks.org/machine-learning/types-of-algorithms-in-pattern-recognition/)

## See Also
- [Pattern-based analysis — OWASP Code Review Guide](https://owasp.org/www-project-code-review-guide/)

## Related
- [Analysis](/features/analysis.md)
- [Lexical Analysis](/features/lexical-analysis.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Abstract Syntactic Tree (AST)](/features/ast.md)
- [Regular Expression](/features/regex.md)

