.. _semantic-analysis:
.. meta::
	:description:
		Semantic Analysis: Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Semantic Analysis
	:twitter:description: Semantic Analysis: Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Semantic Analysis
	:og:type: article
	:og:description: Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/semantic-analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Recursion detected.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Recursion detected.html","name":"Semantic Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:33:17 +0000","dateModified":"Mon, 06 Jul 2026 19:33:17 +0000","description":"Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Semantic Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Semantic Analysis
-----------------

Semantic analysis is the phase of compilation or static analysis that checks the meaning of a program after its structure has been parsed. Where lexical analysis identifies tokens and parsing builds a syntax tree, semantic analysis verifies that the program makes sense according to the rules of the language.

Typical checks performed during semantic analysis include:

+ Type checking: verifying that values are used with compatible types
+ Scope resolution: ensuring that every identifier refers to a declared symbol
+ Arity checking: confirming that functions are called with the correct number of arguments
+ Constant folding: evaluating expressions whose values are known at compile time
+ Dead branch elimination: detecting conditions that are always true or always false

In static analysis, semantic analysis underpins the type inference and undefined-variable checks performed by tools.

.. code-block:: php
   
   <?php
   
       function greet(string $name): string {
           return 'Hello, ' . $name;
       }
       
       // Semantic analysis detects the type mismatch: int passed where string is expected
       greet(42);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Semantic_analysis_(compilers)>`__

Related : :ref:`Analysis <analysis>`, :ref:`Lexical Analysis <lexical-analysis>`, :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Type System <type-system>`, :ref:`Control Flow Analysis <control-flow-analysis>`, :ref:`Data Flow Analysis (DFA) <data-flow-analysis>`, :ref:`Symbolic Analysis <symbolic-analysis>`, :ref:`Pattern-Based Analysis <pattern-based-analysis>`, :ref:`Static Application Security Testing (SAST) <sast>`

Related packages : `phpstan/phpstan <https://packagist.org/packages/phpstan/phpstan>`_, `vimeo/psalm <https://packagist.org/packages/vimeo/psalm>`_
