---
type: "static analysis"
title: "Symbolic Analysis"
description: "Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs."
resource: "https://en.wikipedia.org/wiki/Symbolic_execution"
tags: ["analysis", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Symbolic Analysis

Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs. Rather than tracking the actual runtime value of a variable, it tracks a symbolic expression that describes all possible values the variable could hold.

As the analysis follows each branch in the control flow graph, it accumulates a path condition: a logical formula that describes the constraints on the symbolic inputs that would cause execution to reach that point. A constraint solver, SAT or SMT solver, is then used to check whether the path condition is satisfiable, and if so to produce a concrete witness input.

Applications include:

+ Automated test input generation
+ Finding execution paths that reach a security sink with attacker-controlled data
+ Verifying the absence of certain classes of bugs along all paths

Symbolic analysis is more powerful than pattern-based or data flow analysis but is computationally expensive and suffers from path explosion in large programs.

```php
<?php

    function check(int $x): string {
        // Symbolic analysis explores both branches and generates inputs for each
        if ($x > 0) {
            return 'positive';
        }
        return 'non-positive';
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Symbolic_execution](https://en.wikipedia.org/wiki/Symbolic_execution)

## See Also
- [SymPHP](https://github.com/secureweb/symphp)

## Related
- [Analysis](/features/analysis.md)
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)
- [Lexical Analysis](/features/lexical-analysis.md)
- [Static Application Security Testing (SAST)](/features/sast.md)
- [Taint Analysis](/features/taint.md)

