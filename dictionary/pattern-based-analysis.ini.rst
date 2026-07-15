.. _pattern-based-analysis:
.. _pattern-matching-analysis:
.. meta::
	:description:
		Pattern-Based Analysis: Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pattern-Based Analysis
	:twitter:description: Pattern-Based Analysis: Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pattern-Based Analysis
	:og:type: article
	:og:description: Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pattern-based-analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pattern-based-analysis.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pattern-based-analysis.ini.html","name":"Pattern-Based Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:10:33 +0000","dateModified":"Fri, 03 Jul 2026 08:10:33 +0000","description":"Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pattern-Based Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pattern-Based Analysis
----------------------

Pattern-based analysis is a static analysis technique that detects issues by matching source code against a library of known patterns, without building a full model of the program's execution.

Each pattern describes a structural or textual signature that corresponds to a coding mistake, a security vulnerability, or a style violation. When the pattern matches, a finding is reported.

Pattern-based analysis is:

+ Fast to implement and run, because it requires only a token stream or a partial AST
+ Easy to extend, because new patterns can be added without modifying the analyser core
+ Limited in depth, because it cannot reason about data flow, aliasing, or runtime state

Common uses include detecting calls to deprecated functions, flagging unsafe functions (``eval()``, ``exec()``), enforcing naming conventions, and finding trivially injected values.

Exakat uses pattern-based analysis for many of its rules, alongside deeper analyses.

.. code-block:: php
   
   <?php
   
   // Pattern-based analysis can flag the use of eval() regardless of context
   $code = $_GET['snippet'] ?? '';
   eval($code); // flagged by pattern: use of eval()
   
   ?>


See also `Pattern-based analysis — OWASP Code Review Guide <https://owasp.org/www-project-code-review-guide/>`_.

Related : :ref:`Analysis <analysis>`, :ref:`Lexical Analysis <lexical-analysis>`, :ref:`Semantic Analysis <semantic-analysis>`, :ref:`Control Flow Analysis <control-flow-analysis>`, :ref:`Data Flow Analysis (DFA) <data-flow-analysis>`, :ref:`Symbolic Analysis <symbolic-analysis>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Regular Expression <regex>`
