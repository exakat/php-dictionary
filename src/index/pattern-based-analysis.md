# Pattern-Based Analysis
Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution.

Each pattern describes a structural or textual signature that corresponds to a coding mistake, a security vulnerability, or a style violation. When the pattern matches, a finding is reported.

Pattern-based analysis is:

+ Fast to implement and run, because it requires only a token stream or a partial AST
+ Easy to extend, because new patterns can be added without modifying the analyser core
+ Limited in depth, because it cannot reason about data flow, aliasing, or runtime state

Common uses include detecting calls to deprecated functions, flagging unsafe functions such as ``eval()``, ``exec()``, enforcing naming conventions, and finding trivially injected values.

Exakat uses pattern-based analysis for many of its rules, alongside deeper analyses.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html","name":"Pattern-Based Analysis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:10:11 +0000","dateModified":"Mon, 20 Jul 2026 17:10:11 +0000","description":"Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html"]}],"alternateName":["pattern-matching-analysis"],"keywords":["analysis","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.geeksforgeeks.org\/machine-learning\/types-of-algorithms-in-pattern-recognition\/"},{"@type":"CreativeWork","name":"Pattern-based analysis \u2014 OWASP Code Review Guide","url":"https:\/\/owasp.org\/www-project-code-review-guide\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pattern-based-analysis"}]}]}</script>
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

+ [Analysis](analysis.html)
+ [Lexical Analysis](lexical-analysis.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Control Flow Analysis](control-flow-analysis.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Abstract Syntactic Tree (AST)](ast.html)
+ [Regular Expression](regex.html)
