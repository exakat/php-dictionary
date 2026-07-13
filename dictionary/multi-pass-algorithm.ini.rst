.. _multi-pass-algorithm:
.. _multiple-passes-algorithm:
.. _multi-pass:
.. meta::
	:description:
		Multi-pass Algorithm: A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multi-pass Algorithm
	:twitter:description: Multi-pass Algorithm: A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multi-pass Algorithm
	:og:type: article
	:og:description: A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/multi-pass-algorithm.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Multi-pass Algorithm","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:55:51 +0000","dateModified":"Thu, 09 Jul 2026 09:55:51 +0000","description":"A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multi-pass Algorithm.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multi-pass Algorithm
--------------------

A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would. It trades memory or execution time for simplicity, correctness, or completeness, since a later pass can rely on a full, already-computed picture of the earlier ones, rather than on partial, streamed information.

Compilers are the archetypal example: a multi-pass compiler will first tokenize, then parse into an AST, resolve symbols, and only then generate code, each phase being an independent pass over an evolving representation of the program, instead of translating source directly to machine code in one sweep.

Exakat itself follows a multi-pass approach: it tokenizes the source, builds an AST, loads it into a graph database, and only then runs each analyzer as its own pass over that graph, instead of examining the source code once, top to bottom.

`Documentation <https://en.wikipedia.org/wiki/Multi-pass_compiler>`__

See also `Multi-pass compiler <https://en.wikipedia.org/wiki/Multi-pass_compiler>`_.

Related : :ref:`Parser <parser>`, :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Compiler <compiler>`, :ref:`Tokenizer <tokenizer>`
