# Control Flow Analysis
Control flow analysis, or ``CFA``, is a static analysis technique that examines the possible execution paths through a program. It builds upon the control flow graph to reason about which statements may be reached, which branches may be taken, and which code may be unreachable.

Applications include:

+ Dead code detection: identifying statements that can never be executed
+ Reachability analysis: determining whether a particular point in the code can be reached
+ Exception flow: tracing all paths through try/catch/finally blocks
+ Return path coverage: verifying that all execution paths through a function return a value

Control flow analysis is a prerequisite for more advanced analyses such as data flow analysis and taint analysis.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html","name":"Control Flow Analysis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 09:37:06 +0000","dateModified":"Sun, 30 Aug 2026 09:37:06 +0000","description":"Control flow analysis, or CFA, is a static analysis technique that examines the possible execution paths through a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html"]}],"alternateName":["cfa"],"keywords":["analysis","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-graph.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dead-code.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Control_flow_analysis"},{"@type":"CreativeWork","name":"Control-flow graph","url":"https:\/\/en.wikipedia.org\/wiki\/Control-flow_graph"},{"@type":"CreativeWork","name":"Data-flow analysis","url":"https:\/\/en.wikipedia.org\/wiki\/Data-flow_analysis"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"control-flow-analysis"}]}]}</script>
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
## See Also

+ [Control-flow graph](https://en.wikipedia.org/wiki/Control-flow_graph)
+ [Data-flow analysis](https://en.wikipedia.org/wiki/Data-flow_analysis)

## Related

+ [Control Flow](control-flow.html)
+ [Control Flow Graph (CFG)](control-flow-graph.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Analysis](analysis.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Dead Code](dead-code.html)
+ [Taint Analysis](taint.html)
+ [Lexical Analysis](lexical-analysis.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Symbolic Analysis](symbolic-analysis.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
