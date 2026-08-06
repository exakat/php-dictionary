# Symbolic Analysis
Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs. Rather than tracking the actual runtime value of a variable, it tracks a symbolic expression that describes all possible values the variable could hold.

As the analysis follows each branch in the control flow graph, it accumulates a path condition: a logical formula that describes the constraints on the symbolic inputs that would cause execution to reach that point. A constraint solver, SAT or SMT solver, is then used to check whether the path condition is satisfiable, and if so to produce a concrete witness input.

Applications include:

+ Automated test input generation
+ Finding execution paths that reach a security sink with attacker-controlled data
+ Verifying the absence of certain classes of bugs along all paths

Symbolic analysis is more powerful than pattern-based or data flow analysis but is computationally expensive and suffers from path explosion in large programs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/symbolic-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/symbolic-analysis.html","name":"Symbolic Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:19:54 +0000","dateModified":"Sun, 02 Aug 2026 06:19:54 +0000","description":"Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Symbolic Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Analysis](analysis.ini.html)
+ [Control Flow Analysis](control-flow-analysis.ini.html)
+ [Data Flow Analysis (DFA)](data-flow-analysis.ini.html)
+ [Semantic Analysis](semantic-analysis.ini.html)
+ [Pattern-Based Analysis](pattern-based-analysis.ini.html)
+ [Lexical Analysis](lexical-analysis.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
+ [Taint Analysis](taint.ini.html)
