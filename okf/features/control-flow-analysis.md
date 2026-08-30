---
type: "static analysis"
title: "Control Flow Analysis"
description: "Control flow analysis, or ``CFA``, is a static analysis technique that examines the possible execution paths through a program."
resource: "https://en.wikipedia.org/wiki/Control_flow_analysis"
tags: ["analysis", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Control Flow Analysis

Control flow analysis, or ``CFA``, is a static analysis technique that examines the possible execution paths through a program. It builds upon the control flow graph to reason about which statements may be reached, which branches may be taken, and which code may be unreachable.

Applications include:

+ Dead code detection: identifying statements that can never be executed
+ Reachability analysis: determining whether a particular point in the code can be reached
+ Exception flow: tracing all paths through try/catch/finally blocks
+ Return path coverage: verifying that all execution paths through a function return a value

Control flow analysis is a prerequisite for more advanced analyses such as data flow analysis and taint analysis.

```php
<?php

function divide(int $a, int $b): float {
    if ($b === 0) {
        throw new InvalidArgumentException('Division by zero');
    }

    return $a / $b;

    // Control flow analysis detects that the line below is unreachable
    echo 'done';
}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Control_flow_analysis](https://en.wikipedia.org/wiki/Control_flow_analysis)

## See Also
- [Control-flow graph](https://en.wikipedia.org/wiki/Control-flow_graph)
- [Data-flow analysis](https://en.wikipedia.org/wiki/Data-flow_analysis)

## Related
- [Control Flow](/features/control-flow.md)
- [Control Flow Graph (CFG)](/features/control-flow-graph.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Analysis](/features/analysis.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Dead Code](/features/dead-code.md)
- [Taint Analysis](/features/taint.md)
- [Lexical Analysis](/features/lexical-analysis.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)

