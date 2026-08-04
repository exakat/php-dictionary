# Control Flow Analysis
Control flow analysis is a static analysis technique that examines the possible execution paths through a program. It builds upon the control flow graph to reason about which statements may be reached, which branches may be taken, and which code may be unreachable.

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

Related : [Control Flow](Control Flow), [Control Flow Graph (CFG)](Control Flow Graph (CFG)), [Data Flow Analysis (DFA)](Data Flow Analysis (DFA)), [Analysis](Analysis), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Dead Code](Dead Code), [Taint Analysis](Taint Analysis), [Lexical Analysis](Lexical Analysis), [Semantic Analysis](Semantic Analysis), [Symbolic Analysis](Symbolic Analysis), [Pattern-Based Analysis](Pattern-Based Analysis)
