# Analysis
Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding.

Static analysis examines code without executing it. Tools such as PHPStan, Psalm, and Phan inspect PHP source files for type errors, undefined variables, dead code, and security vulnerabilities. Exakat is a static analyser specifically designed for PHP, able to audit large codebases and enforce rules across many categories.

Dynamic analysis examines code during execution. It covers profiling, fuzzing, mutation testing, and runtime error detection.

Architectural analysis focuses on the relationships between components, coupling, cohesion, and adherence to intended design patterns.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/analysis.html","name":"Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:35:32 +0000","dateModified":"Tue, 04 Aug 2026 11:35:32 +0000","description":"Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

## Related

+ [Static Application Security Testing (SAST)](sast.ini.html)
+ [Abstract Syntactic Tree (AST)](ast.ini.html)
+ [Metrics](metrics.ini.html)
+ [Quality](quality.ini.html)
+ [Code Review](code-review.ini.html)
+ [Continuous Integration (CI)](ci.ini.html)
+ [Dead Code](dead-code.ini.html)
+ [Type Coverage](type-coverage.ini.html)
+ [Code Inventory](inventory.ini.html)
+ [Static Code Analysis (SCA)](sca.ini.html)
+ [Tool](tool.ini.html)
+ [Lexical Analysis](lexical-analysis.ini.html)
+ [Semantic Analysis](semantic-analysis.ini.html)
+ [Control Flow Analysis](control-flow-analysis.ini.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.ini.html)
+ [Symbolic Analysis](symbolic-analysis.ini.html)
+ [Pattern-Based Analysis](pattern-based-analysis.ini.html)
+ [Linting](linting.ini.html)

## Related packages

+ [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
+ [vimeo/psalm](https://packagist.org/packages/vimeo/psalm)
+ [phan/phan](https://packagist.org/packages/phan/phan)
