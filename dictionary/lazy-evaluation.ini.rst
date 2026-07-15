.. _lazy-evaluation:
.. meta::
	:description:
		Lazy Evaluation: Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lazy Evaluation
	:twitter:description: Lazy Evaluation: Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lazy Evaluation
	:og:type: article
	:og:description: Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lazy-evaluation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lazy-evaluation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lazy-evaluation.ini.html","name":"Lazy Evaluation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:45:42 +0000","dateModified":"Thu, 09 Jul 2026 07:45:42 +0000","description":"Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lazy Evaluation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lazy Evaluation
---------------

Lazy evaluation is an evaluation strategy in which an expression's value is not computed until it is actually needed, and, once computed, is often cached so it is never recomputed. Haskell evaluates every expression this way by default: a list can be infinite, because only the elements actually consumed are ever produced.

This is stronger than lazy iteration: it applies to any expression, including function arguments and let-bindings, not only to sequences produced one step at a time.

PHP is strictly, eagerly evaluated everywhere except in a few specific opt-in constructs. ``Generator`` functions built with ``yield`` produce values lazily, one at a time, on demand, and short-circuiting operators such as ``&&``, ``||``, and ``??`` skip evaluating their right-hand side when the outcome is already known. Outside of these, every argument, every array element, and every expression is fully evaluated as soon as control reaches it; there is no general, opt-out mechanism to defer an arbitrary computation until its result is read.

.. code-block:: php
   
   <?php
   
       // Lazy, but only because it is explicitly written as a generator.
       function naturals(): Generator {
           $n = 1;
           while (true) {
               yield $n++;
           }
       }
       
       foreach (naturals() as $n) {
           if ($n > 5) break;
           echo $n, ' ';
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Lazy_evaluation>`__

See also `Lazy Evaluation in PHP: Real‑World Memory Savings with Generators <https://dev.to/phpner/lazy-evaluation-in-php-how-generators-and-iterators-save-memory-and-speed-up-code-3529>`_.

Related : :ref:`Generator <generator>`, :ref:`Yield <yield>`, :ref:`Lazy Loading <lazy-loading>`, :ref:`Lazy Objects <lazy-objects>`, :ref:`Range Type <range-type>`
