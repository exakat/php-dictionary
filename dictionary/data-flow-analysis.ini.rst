.. _data-flow-analysis:
.. _dfa:
.. meta::
	:description:
		Data Flow Analysis (DFA): Data flow analysis is a static analysis technique that tracks how data values move through a program.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Data Flow Analysis (DFA)
	:twitter:description: Data Flow Analysis (DFA): Data flow analysis is a static analysis technique that tracks how data values move through a program
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Data Flow Analysis (DFA)
	:og:type: article
	:og:description: Data flow analysis is a static analysis technique that tracks how data values move through a program
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/data-flow-analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/data-flow-analysis.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/data-flow-analysis.ini.html","name":"Data Flow Analysis (DFA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 07:55:24 +0000","dateModified":"Tue, 07 Jul 2026 07:55:24 +0000","description":"Data flow analysis is a static analysis technique that tracks how data values move through a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Data Flow Analysis (DFA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Data Flow Analysis (DFA)
------------------------

Data flow analysis is a static analysis technique that tracks how data values move through a program. It follows variables from the point where they are defined or assigned to the points where they are used.

Common data flow problems include:

+ Reaching definitions: which assignments of a variable can reach a given use
+ Live variables: which variables hold values that may still be used later
+ Taint analysis: whether user-supplied data can reach a sensitive sink without sanitisation
+ Type inference: propagating known type information across the program
+ Null propagation: detecting paths where a null value is used without a check

Data flow analysis requires a control flow graph. It is foundational for security tools that detect injection vulnerabilities and for compilers that optimise code.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Data-flow_analysis>`__

See also `Data-flow analysis — Wikipedia <https://en.wikipedia.org/wiki/Data-flow_analysis>`_.

Related : :ref:`Control Flow Analysis <control-flow-analysis>`, :ref:`Control Flow Graph (CFG) <control-flow-graph>`, :ref:`Taint Analysis <taint>`, :ref:`Analysis <analysis>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`SQL Injection <sql-injection>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`Lexical Analysis <lexical-analysis>`, :ref:`Semantic Analysis <semantic-analysis>`, :ref:`Symbolic Analysis <symbolic-analysis>`, :ref:`Pattern-Based Analysis <pattern-based-analysis>`
