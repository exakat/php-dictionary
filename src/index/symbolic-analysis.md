# Symbolic Analysis
Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs. Rather than tracking the actual runtime value of a variable, it tracks a symbolic expression that describes all possible values the variable could hold.

As the analysis follows each branch in the control flow graph, it accumulates a path condition: a logical formula that describes the constraints on the symbolic inputs that would cause execution to reach that point. A constraint solver, SAT or SMT solver, is then used to check whether the path condition is satisfiable, and if so to produce a concrete witness input.

Applications include:

+ Automated test input generation
+ Finding execution paths that reach a security sink with attacker-controlled data
+ Verifying the absence of certain classes of bugs along all paths

Symbolic analysis is more powerful than pattern-based or data flow analysis but is computationally expensive and suffers from path explosion in large programs.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symbolic-analysis.html","name":"Symbolic Analysis","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:19:54 +0000","dateModified":"Sun, 02 Aug 2026 06:19:54 +0000","description":"Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Symbolic Analysis.html"]}],"alternateName":["symbolic-execution"],"keywords":["analysis","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-flow-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semantic-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern-based-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/taint.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Symbolic_execution"},{"@type":"CreativeWork","name":"SymPHP","url":"https:\/\/github.com\/secureweb\/symphp"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"symbolic-analysis"}]}]}</script>
```php
<?php

    function check(int $x): string {
        // Symbolic analysis explores both branches and generates inputs for each
        if ($x > 0) {
            return 'positive';
        }
        return 'non-positive';
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Symbolic_execution)**
## See Also

+ [SymPHP](https://github.com/secureweb/symphp)

## Related

+ [Analysis](analysis.html)
+ [Control Flow Analysis](control-flow-analysis.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Pattern-Based Analysis](pattern-based-analysis.html)
+ [Lexical Analysis](lexical-analysis.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Taint Analysis](taint.html)
