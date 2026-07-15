.. _multiple-return-value:
.. meta::
	:description:
		Multiple Return Values: Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: ``func divide(a, b int) (int, int) { return a/b, a%b }``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple Return Values
	:twitter:description: Multiple Return Values: Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: ``func divide(a, b int) (int, int) { return a/b, a%b }``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multiple Return Values
	:og:type: article
	:og:description: Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: ``func divide(a, b int) (int, int) { return a/b, a%b }``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/multiple-return-value.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/multiple-return-value.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/multiple-return-value.ini.html","name":"Multiple Return Values","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:34:31 +0000","dateModified":"Wed, 08 Jul 2026 15:34:31 +0000","description":"Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: ``func divide(a, b int) (int, int) { return a\/b, a%b }``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multiple Return Values.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multiple Return Values
----------------------

Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: ``func divide(a, b int) (int, int) { return a/b, a%b }``. The caller receives them individually, typically by assigning each to its own variable in one statement.

This differs from returning a single composite value such as a tuple or array, because the values are not boxed: the function's declared return arity is part of its signature, and the caller can discard trailing values it does not need.

PHP functions return exactly one value. Returning several values requires wrapping them in an array, a tuple-like list, or an object, and then destructuring the result with list assignment: ``[$q, $r] = divmod($a, $b);``. The array is a real value that exists at runtime, is allocated like any other array, and the ``return`` statement itself only ever returns that one array.

.. code-block:: php
   
   <?php
   
       function divmod(int $a, int $b): array {
           return [intdiv($a, $b), $a % $b];
       }
       
       [$quotient, $remainder] = divmod(7, 2);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Return_statement#Multiple_return_values>`__

See also `Return statement in Wikipedia <https://en.wikipedia.org/wiki/Return_statement>`_.

Related : :ref:`Return <return>`, :ref:`List <list>`, :ref:`Tuple <tuple>`, :ref:`Array, [] <array>`
