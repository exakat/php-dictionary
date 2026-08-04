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

Related : [Analysis](Analysis), [Lexical Analysis](Lexical Analysis), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Type System](Type System), [Control Flow Analysis](Control Flow Analysis), [Data Flow Analysis (DFA)](Data Flow Analysis (DFA)), [Symbolic Analysis](Symbolic Analysis), [Pattern-Based Analysis](Pattern-Based Analysis), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST))
