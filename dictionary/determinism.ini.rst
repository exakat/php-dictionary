.. _determinism:
.. meta::
	:description:
		Determinism: A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Determinism
	:twitter:description: Determinism: A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Determinism
	:og:type: article
	:og:description: A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/determinism.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/determinism.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/determinism.ini.html","name":"Determinism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:15 +0000","dateModified":"Fri, 19 Jun 2026 21:24:15 +0000","description":"A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Determinism.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Determinism
-----------

A deterministic function or algorithm always produces the same output for the same input, regardless of when or how many times it is called. It has no side effects and does not rely on external or mutable state.

Determinism is relevant to caching strategies, testing, and the correctness of pure functions. Non-deterministic sources such as ``rand()``, ``time()``, ``microtime()``, or global state break determinism and make functions harder to test and reason about.

Determinism is a core property of pure functions in functional programming and is closely related to idempotence.

.. code-block:: php
   
   <?php
   
       // deterministic: same input always yields same output
       function add(int $a, int $b): int {
           return $a + $b;
       }
       
       // non-deterministic: depends on current time
       function currentHour(): int {
           return (int) date('H');
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Deterministic_algorithm>`__

Related : :ref:`Pure Function <pure-function>`, :ref:`Side Effect <side-effect>`, :ref:`Idempotent <idempotent>`, :ref:`Functional Programming <functional-programming>`, :ref:`Immutable <immutable>`, :ref:`Cache <cache>`, :ref:`Memoization <memoization>`, :ref:`Random <random>`, :ref:`Deterministic <deterministic>`, :ref:`Impure Function <impure-function>`
