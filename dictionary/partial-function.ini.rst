.. _partial-function:
.. meta::
	:description:
		Partial Function: A partial function is a function that has some parameters already known, and still need some final ones before execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Partial Function
	:twitter:description: Partial Function: A partial function is a function that has some parameters already known, and still need some final ones before execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Partial Function
	:og:type: article
	:og:description: A partial function is a function that has some parameters already known, and still need some final ones before execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/partial-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Partial Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"A partial function is a function that has some parameters already known, and still need some final ones before execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Partial Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Partial Function
----------------

A partial function is a function that has some parameters already known, and still need some final ones before execution. The function is said ``partial``, as it count be executed a little, but not fully.

In general, the partial function is built on with a closure or an arrow function, and the locally available parameters. It is then passed to other contexts, which holds the rest of the arguments.

Partial function is related to functional programming.

.. code-block:: php
   
   <?php
   
   function foo($a, $b, $c) { return $a + $b + $c; }
   
   $a = 1;
   $b = 2;
   $partial = function ($c) use ($a, $b) { return foo($a, $b, $c); }
   
   // as an arrow function
   $partial = fn ($c) => foo($a, $b, $c);
   
   goo($partial);
   
   function goo(callable $partial) {
       $c = fetchDataSomewhere();
       
       return $partial($c);
   }
   
   ?>


Related : :ref:`Functional Programming <functional-programming>`

Related packages : `react/partial <https://packagist.org/packages/react/partial>`_
