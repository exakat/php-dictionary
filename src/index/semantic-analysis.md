# Semantic Analysis
Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed. Where lexical analysis identifies tokens and parsing builds a syntax tree, semantic analysis verifies that the program makes sense according to the rules of the language.

Typical checks performed during semantic analysis include:

+ Type checking: verifying that values are used with compatible types
+ Scope resolution: ensuring that every identifier refers to a declared symbol
+ Arity checking: confirming that functions are called with the correct number of arguments
+ Constant folding: evaluating expressions whose values are known at compile time
+ Dead branch elimination: detecting conditions that are always true or always false

In static analysis, semantic analysis underpins the type inference and undefined-variable checks performed by tools.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html","name":"Semantic Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:01:43 +0000","dateModified":"Sat, 08 Aug 2026 08:01:43 +0000","description":"Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Semantic Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Semantic Analysis"}]}]}</script>
```php
<?php

    function greet(string $name): string {
        return 'Hello, ' . $name;
    }
    
    // Semantic analysis detects the type mismatch: int passed where string is expected
    greet(42);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Semantic_analysis_(compilers))**
## See Also

+ [Semantic Analysis in Compiler Design](https://www.geeksforgeeks.org/compiler-design/semantic-analysis-in-compiler-design/)

## Related

+ [Analysis](analysis.html)
+ [Lexical Analysis](lexical-analysis.html)
+ [Abstract Syntactic Tree (AST)](ast.html)
+ [Type System](type-system.html)
+ [Control Flow Analysis](control-flow-analysis.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
+ [Static Application Security Testing (SAST)](sast.html)

## Related packages

+ [phpstan/phpstan](https://packagist.org/packages/phpstan/phpstan)
+ [vimeo/psalm](https://packagist.org/packages/vimeo/psalm)
