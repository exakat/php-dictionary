---
type: "static analysis"
title: "Data Flow Analysis (DFA)"
description: "Data flow analysis, or ``DFA``, is a static analysis technique that tracks how data values move through a program."
resource: "https://en.wikipedia.org/wiki/Data-flow_analysis"
tags: ["analysis", "static analysis", "security", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Data Flow Analysis (DFA)

Data flow analysis, or ``DFA``, is a static analysis technique that tracks how data values move through a program. It follows variables from the point where they are defined or assigned to the points where they are used.

Common data flow problems include:

+ Reaching definitions: which assignments of a variable can reach a given use
+ Live variables: which variables hold values that may still be used later
+ Taint analysis: whether user-supplied data can reach a sensitive sink without sanitisation
+ Type inference: propagating known type information across the program
+ Null propagation: detecting paths where a null value is used without a check

Data flow analysis requires a control flow graph. It is foundational for security tools that detect injection vulnerabilities and for compilers that optimise code.

```php
<?php

function process(string $input): string {
    $sanitized = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    // Data flow analysis confirms $sanitized is safe to echo
    return $sanitized;
}

function unsafe(string $input): void {
    // Data flow analysis flags $input as tainted at this sink
    echo $input;
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Data-flow_analysis](https://en.wikipedia.org/wiki/Data-flow_analysis)

## See Also
- [Yama: Precise Opcode-based Data Flow Analysis for Detecting PHP Applications Vulnerabilities](https://github.com/xjzzzxx/Yama)

## Related
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [Control Flow Graph (CFG)](/features/control-flow-graph.md)
- [Taint Analysis](/features/taint.md)
- [Analysis](/features/analysis.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [SQL Injection](/features/sql-injection.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Lexical Analysis](/features/lexical-analysis.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)

