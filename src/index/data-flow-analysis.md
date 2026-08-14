# Data Flow Analysis (DFA)
Data flow analysis is a static analysis technique that tracks how data values move through a program. It follows variables from the point where they are defined or assigned to the points where they are used.

Common data flow problems include:

+ Reaching definitions: which assignments of a variable can reach a given use
+ Live variables: which variables hold values that may still be used later
+ Taint analysis: whether user-supplied data can reach a sensitive sink without sanitisation
+ Type inference: propagating known type information across the program
+ Null propagation: detecting paths where a null value is used without a check

Data flow analysis requires a control flow graph. It is foundational for security tools that detect injection vulnerabilities and for compilers that optimise code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html","name":"Data Flow Analysis (DFA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:16:59 +0000","dateModified":"Fri, 17 Jul 2026 09:16:59 +0000","description":"Data flow analysis is a static analysis technique that tracks how data values move through a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Data Flow Analysis (DFA).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"data-flow-analysis"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Data-flow_analysis)**
## See Also

+ [Yama: Precise Opcode-based Data Flow Analysis for Detecting PHP Applications Vulnerabilities](https://github.com/xjzzzxx/Yama)

## Related

+ [Control Flow Analysis](control-flow-analysis.html)
+ [Control Flow Graph (CFG)](control-flow-graph.html)
+ [Taint Analysis](taint.html)
+ [Analysis](analysis.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [SQL Injection](sql-injection.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Lexical Analysis](lexical-analysis.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
