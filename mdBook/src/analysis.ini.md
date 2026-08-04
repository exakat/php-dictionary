# Analysis
Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding.

Static analysis examines code without executing it. Tools such as PHPStan, Psalm, and Phan inspect PHP source files for type errors, undefined variables, dead code, and security vulnerabilities. Exakat is a static analyser specifically designed for PHP, able to audit large codebases and enforce rules across many categories.

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

+ [PHPStan](https://phpstan.org/)
+ [Psalm](https://psalm.dev/)
+ [Exakat](https://www.exakat.io/)
+ [Mago](https://mago.carthage.software/1.45.0/en/)
+ [Top 7 Methods, Pros/Cons and Best Practices](https://www.oligo.security/academy/static-code-analysis)

Related : [Static Application Security Testing (SAST)](Static Application Security Testing (SAST)), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Metrics](Metrics), [Quality](Quality), [Code Review](Code Review), [Continuous Integration (CI)](Continuous Integration (CI)), [Dead Code](Dead Code), [Type Coverage](Type Coverage), [Code Inventory](Code Inventory), [Static Code Analysis (SCA)](Static Code Analysis (SCA)), [Tool](Tool), [Lexical Analysis](Lexical Analysis), [Semantic Analysis](Semantic Analysis), [Control Flow Analysis](Control Flow Analysis), [Data Flow Analysis (DFA)](Data Flow Analysis (DFA)), [Symbolic Analysis](Symbolic Analysis), [Pattern-Based Analysis](Pattern-Based Analysis), [Linting](Linting)
