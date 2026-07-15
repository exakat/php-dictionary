.. _currying:
.. _partial-application-currying:
.. meta::
	:description:
		Currying: Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Currying
	:twitter:description: Currying: Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Currying
	:og:type: article
	:og:description: Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/currying.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/currying.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/currying.ini.html","name":"Currying","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:06:01 +0000","dateModified":"Thu, 02 Jul 2026 08:06:01 +0000","description":"Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Currying.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Currying
--------

Currying is the transformation of a function that takes multiple arguments into a sequence of functions that each take a single argument. The name comes from mathematician Haskell Curry.

In a language with native currying, calling a multi-argument function with fewer arguments than it expects does not produce an error: it returns a new function that expects the remaining arguments. This allows building specialised functions from general ones with no extra syntax.

Native currying is available in Haskell, F#, OCaml, and Erlang, where all functions are curried by default. Scala and Kotlin support it explicitly.

PHP does not support currying natively. It can be approximated by returning closures manually, but there is no syntactic or runtime support.

.. code-block:: php
   
   <?php
   
       // Manual simulation of currying with closures
       $add = fn($x) => fn($y) => $x + $y;
   
       $add5 = $add(5);
       echo $add5(3); // 8
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Currying>`__

See also `Currying in Haskell <https://wiki.haskell.org/Currying>`_ and `Currying in F# <https://learn.microsoft.com/en-us/dotnet/fsharp/introduction-to-functional-programming/first-class-functions>`_.

Related : :ref:`Partial Function <partial-function>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Functional Programming <functional-programming>`, :ref:`Closure <closure>`
