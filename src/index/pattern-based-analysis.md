# Pattern-Based Analysis
Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution.

Each pattern describes a structural or textual signature that corresponds to a coding mistake, a security vulnerability, or a style violation. When the pattern matches, a finding is reported.

Pattern-based analysis is:

+ Fast to implement and run, because it requires only a token stream or a partial AST
+ Easy to extend, because new patterns can be added without modifying the analyser core
+ Limited in depth, because it cannot reason about data flow, aliasing, or runtime state

Common uses include detecting calls to deprecated functions, flagging unsafe functions such as ``eval()``, ``exec()``, enforcing naming conventions, and finding trivially injected values.

Exakat uses pattern-based analysis for many of its rules, alongside deeper analyses.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pattern-based-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pattern-based-analysis.html","name":"Pattern-Based Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:10:11 +0000","dateModified":"Mon, 20 Jul 2026 17:10:11 +0000","description":"Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Pattern-Based Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Pattern-based analysis can flag the use of eval() regardless of context
    $code = $_GET['snippet'] ?? '';
    eval($code); // flagged by pattern: use of eval()

?>
```

**[Documentation](https://www.geeksforgeeks.org/machine-learning/types-of-algorithms-in-pattern-recognition/)**
## See Also

+ [Pattern-based analysis — OWASP Code Review Guide](https://owasp.org/www-project-code-review-guide/)

## Related

+ [Analysis](analysis.ini.html)
+ [Lexical Analysis](lexical-analysis.ini.html)
+ [Semantic Analysis](semantic-analysis.ini.html)
+ [Control Flow Analysis](control-flow-analysis.ini.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.ini.html)
+ [Symbolic Analysis](symbolic-analysis.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
+ [Abstract Syntactic Tree (AST)](ast.ini.html)
+ [Regular Expression](regex.ini.html)
