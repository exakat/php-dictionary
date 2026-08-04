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

## See Also

+ [Pattern-based analysis — OWASP Code Review Guide](https://owasp.org/www-project-code-review-guide/)

Related : [Analysis](Analysis), [Lexical Analysis](Lexical Analysis), [Semantic Analysis](Semantic Analysis), [Control Flow Analysis](Control Flow Analysis), [Data Flow Analysis (DFA)](Data Flow Analysis (DFA)), [Symbolic Analysis](Symbolic Analysis), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Regular Expression](Regular Expression)
