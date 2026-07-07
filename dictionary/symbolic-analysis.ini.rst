.. _symbolic-analysis:
.. _symbolic-execution:
.. meta::
	:description:
		Symbolic Analysis: Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Symbolic Analysis
	:twitter:description: Symbolic Analysis: Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Symbolic Analysis
	:og:type: article
	:og:description: Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/symbolic-analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Symbolic Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:33:51 +0000","dateModified":"Mon, 06 Jul 2026 19:33:51 +0000","description":"Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Symbolic Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Symbolic Analysis
-----------------

Symbolic analysis, also called symbolic execution, is a static analysis technique that executes a program with symbolic values instead of concrete inputs. Rather than tracking the actual runtime value of a variable, it tracks a symbolic expression that describes all possible values the variable could hold.

As the analysis follows each branch in the control flow graph, it accumulates a path condition: a logical formula that describes the constraints on the symbolic inputs that would cause execution to reach that point. A constraint solver (SAT or SMT solver) is then used to check whether the path condition is satisfiable, and if so to produce a concrete witness input.

Applications include:

+ Automated test input generation
+ Finding execution paths that reach a security sink with attacker-controlled data
+ Verifying the absence of certain classes of bugs along all paths

Symbolic analysis is more powerful than pattern-based or data flow analysis but is computationally expensive and suffers from path explosion in large programs.

.. code-block:: php
   
   <?php
   
   function check(int $x): string {
       // Symbolic analysis explores both branches and generates inputs for each
       if ($x > 0) {
           return 'positive';
       }
       return 'non-positive';
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Symbolic_execution>`__

Related : :ref:`Analysis <analysis>`, :ref:`Control Flow Analysis <control-flow-analysis>`, :ref:`Data Flow Analysis (DFA) <data-flow-analysis>`, :ref:`Semantic Analysis <semantic-analysis>`, :ref:`Pattern-Based Analysis <pattern-based-analysis>`, :ref:`Lexical Analysis <lexical-analysis>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Taint Analysis <taint>`
