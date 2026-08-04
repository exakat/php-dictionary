# Data Flow Analysis (DFA)
Data flow analysis is a static analysis technique that tracks how data values move through a program. It follows variables from the point where they are defined or assigned to the points where they are used.

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

## See Also

+ [Yama: Precise Opcode-based Data Flow Analysis for Detecting PHP Applications Vulnerabilities](https://github.com/xjzzzxx/Yama)

Related : [Control Flow Analysis](Control Flow Analysis), [Control Flow Graph (CFG)](Control Flow Graph (CFG)), [Taint Analysis](Taint Analysis), [Analysis](Analysis), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [SQL Injection](SQL Injection), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [Lexical Analysis](Lexical Analysis), [Semantic Analysis](Semantic Analysis), [Symbolic Analysis](Symbolic Analysis), [Pattern-Based Analysis](Pattern-Based Analysis)
