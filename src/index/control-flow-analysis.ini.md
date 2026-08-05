# Control Flow Analysis
Control flow analysis is a static analysis technique that examines the possible execution paths through a program. It builds upon the control flow graph to reason about which statements may be reached, which branches may be taken, and which code may be unreachable.

Applications include:

+ Dead code detection: identifying statements that can never be executed
+ Reachability analysis: determining whether a particular point in the code can be reached
+ Exception flow: tracing all paths through try/catch/finally blocks
+ Return path coverage: verifying that all execution paths through a function return a value

Control flow analysis is a prerequisite for more advanced analyses such as data flow analysis and taint analysis.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/control-flow-analysis.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/control-flow-analysis.ini.html","name":"Control Flow Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jul 2026 05:12:54 +0000","dateModified":"Sat, 18 Jul 2026 05:12:54 +0000","description":"Control flow analysis is a static analysis technique that examines the possible execution paths through a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Control Flow Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function divide(int $a, int $b): float {
    if ($b === 0) {
        throw new InvalidArgumentException('Division by zero');
    }

    return $a / $b;

    // Control flow analysis detects that the line below is unreachable
    echo 'done';
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Control_flow_analysis)**
## Related

+ [Control Flow](control-flow.ini.html)
+ [Control Flow Graph (CFG)](control-flow-graph.ini.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.ini.html)
+ [Analysis](analysis.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
+ [Dead Code](dead-code.ini.html)
+ [Taint Analysis](taint.ini.html)
+ [Lexical Analysis](lexical-analysis.ini.html)
+ [Semantic Analysis](semantic-analysis.ini.html)
+ [Symbolic Analysis](symbolic-analysis.ini.html)
+ [Pattern-Based Analysis](pattern-based-analysis.ini.html)
