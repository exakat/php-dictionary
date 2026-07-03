.. _control-flow-analysis:
.. _cfa:
.. meta::
	:description:
		Control Flow Analysis: Control flow analysis is a static analysis technique that examines the possible execution paths through a program.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Control Flow Analysis
	:twitter:description: Control Flow Analysis: Control flow analysis is a static analysis technique that examines the possible execution paths through a program
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Control Flow Analysis
	:og:type: article
	:og:description: Control flow analysis is a static analysis technique that examines the possible execution paths through a program
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/control-flow-analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Control Flow Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:09:20 +0000","dateModified":"Fri, 03 Jul 2026 08:09:20 +0000","description":"Control flow analysis is a static analysis technique that examines the possible execution paths through a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Control Flow Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Control Flow Analysis
---------------------

Control flow analysis is a static analysis technique that examines the possible execution paths through a program. It builds upon the control flow graph to reason about which statements may be reached, which branches may be taken, and which code may be unreachable.

Applications include:

+ Dead code detection: identifying statements that can never be executed
+ Reachability analysis: determining whether a particular point in the code can be reached
+ Exception flow: tracing all paths through try/catch/finally blocks
+ Return path coverage: verifying that all execution paths through a function return a value

Control flow analysis is a prerequisite for more advanced analyses such as data flow analysis and taint analysis.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Control_flow_analysis>`__

See also `Control Flow Analysis — Wikipedia <https://en.wikipedia.org/wiki/Control_flow_analysis>`_.

Related : :ref:`Control Flow <control-flow>`, :ref:`Control Flow Graph <control-flow-graph>`, :ref:`Data Flow Analysis <data-flow-analysis>`, :ref:`Analysis <analysis>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Dead Code <dead-code>`, :ref:`Taint Analysis <taint>`, :ref:`Lexical Analysis <lexical-analysis>`, :ref:`Semantic Analysis <semantic-analysis>`, :ref:`Symbolic Analysis <symbolic-analysis>`, :ref:`Pattern-Based Analysis <pattern-based-analysis>`
