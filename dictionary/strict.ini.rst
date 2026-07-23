.. _strict:
.. meta::
	:description:
		Strict: The word ``strict`` appears in several distinct PHP concepts:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Strict
	:twitter:description: Strict: The word ``strict`` appears in several distinct PHP concepts:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Strict
	:og:type: article
	:og:description: The word ``strict`` appears in several distinct PHP concepts:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/strict.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strict.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strict.ini.html","name":"Strict","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:33:10 +0000","dateModified":"Thu, 23 Jul 2026 13:33:10 +0000","description":"The word ``strict`` appears in several distinct PHP concepts:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Strict.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Strict
------

The word ``strict`` appears in several distinct PHP concepts:

+ ``strict_types`` declare directive: a per-file directive, ``declare(strict_types=1)``, that disables PHP's automatic scalar type coercion. When active, passing a value of the wrong type to a typed parameter raises a ``TypeError`` rather than silently casting the value.
+ Strict comparison: the use of identity operators ``===`` and ``!==`` instead of equality operators ``==`` and ``!=``. Strict comparison checks both value and type, bypassing type juggling. The ``match`` expression and the third parameter of ``in_array()`` also operate in strict mode.
+ Gradual type checking: the type system is optional and enforced at runtime. ``strict_types`` tightens enforcement within a file but does not affect calls coming from other files. This is distinct from compile-time strict type systems found in statically typed languages.

.. code-block:: php
   
   <?php
   declare(strict_types=1);
   
   // strict_types: TypeError, no silent cast
   function square(int $n): int { return $n * $n; }
   
   // strict comparison: false, different types
   var_dump(0 === false);
   
   // strict in_array: false, '1' !== 1
   var_dump(in_array('1', [1, 2, 3], true));
   
   ?>


Related : :ref:`strict_types <strict_types>`, :ref:`Strict Comparison <strict-comparison>`, :ref:`Type Checking <type-checking>`, :ref:`Relaxed Comparison <relaxed-comparison>`, :ref:`Type Juggling <type-juggling>`, :ref:`in_array() <in_array>`, :ref:`Match <match>`, :ref:`Gradual Type Checking <gradual-type-checking>`
