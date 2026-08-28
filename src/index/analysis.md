# Analysis
Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding.

Static analysis examines code without executing it. Tools such as ``PHPStan``, ``Psalm``, ``Mago`` and ``Phan`` inspect PHP source files for type errors, undefined variables, dead code, and security vulnerabilities. Exakat is a static analyser specifically designed for PHP, able to audit large codebases and enforce rules across many categories.

Dynamic analysis examines code during execution. It covers profiling, fuzzing, mutation testing, and runtime error detection.

Architectural analysis focuses on the relationships between components, coupling, cohesion, and adherence to intended design patterns.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html","name":"Analysis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:00:59 +0000","dateModified":"Mon, 10 Aug 2026 17:00:59 +0000","description":"Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"]}],"keywords":["quality","tooling","static analysis","_noDocumentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metrics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/quality.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-review.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ci.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dead-code.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-coverage.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inventory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tool.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linting.html"}],"citation":[{"@type":"CreativeWork","name":"PHPStan","url":"https:\/\/phpstan.org\/"},{"@type":"CreativeWork","name":"Psalm","url":"https:\/\/psalm.dev\/"},{"@type":"CreativeWork","name":"Exakat","url":"https:\/\/www.exakat.io\/"},{"@type":"CreativeWork","name":"Mago","url":"https:\/\/mago.carthage.software\/1.45.0\/en\/"},{"@type":"CreativeWork","name":"Top 7 Methods, Pros\/Cons and Best Practices","url":"https:\/\/www.oligo.security\/academy\/static-code-analysis"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"analysis"}]}]}</script>
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

+ [Static Application Security Testing (SAST)](sast.html)
+ [Abstract Syntactic Tree (AST)](ast.html)
+ [Metrics](metrics.html)
+ [Quality](quality.html)
+ [Code Review](code-review.html)
+ [Continuous Integration (CI)](ci.html)
+ [Dead Code](dead-code.html)
+ [Type Coverage](type-coverage.html)
+ [Code Inventory](inventory.html)
+ [Static Code Analysis (SCA)](sca.html)
+ [Tool](tool.html)
+ [Lexical Analysis](lexical-analysis.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Control Flow Analysis](control-flow-analysis.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
+ [Linting](linting.html)

## Related packages

+ [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
+ [vimeo/psalm](https://packagist.org/packages/vimeo/psalm)
+ [phan/phan](https://packagist.org/packages/phan/phan)
