.. _three-dots:
.. _spread-operator:
.. meta::
	:description:
		Three Dots: Three dots, is an operator with several usages and names.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Three Dots
	:twitter:description: Three Dots: Three dots, is an operator with several usages and names
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Three Dots
	:og:type: article
	:og:description: Three dots, is an operator with several usages and names
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/three-dots.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Three Dots","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 30 Aug 2025 20:34:23 +0000","dateModified":"Sat, 30 Aug 2025 20:34:23 +0000","description":"Three dots, is an operator with several usages and names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Three Dots.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Three Dots
----------

Three dots, is an operator with several usages and names.

+ variadic, to make the last parameter collect all arguments in an array
+ spread, to expand elements of an array into arguments positions
+ spread in array, to merge several arrays in one
+ closure creator, when used standalone in a methodcall.

The various features of this operator were introduced in different PHP versions. 



.. code-block:: php
   
   <?php
   
   $a = [2, 3];
   // equivalent to [1, 2, 3], or array_merge([1], $a);
   $array = [1, ...$a];
   
   // spread operator, in function call
   // same as foo(0, 1, 2, 3, 4);
   foo(0, ...$array, 4);
   
   
   // variadic argument (the last one)
   function foo($special, ...$others) {
       // with the above call
       // $special === 0
       // $others === [1, 2, 3, 4]
   }
   
   // PHP 8.1
   $closure = strlen(...);
   echo $closure('Ab'); // display 2, by calling strlen
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list>`__

Related : :ref:`Variable Arguments <variable-argument>`, :ref:`Array Spread <array-spread>`, :ref:`Ellipsis <ellipsis>`, :ref:`First Class Callable <first-class-callable>`

Added in PHP 5.6
