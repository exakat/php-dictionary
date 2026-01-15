.. _anonymous-function:
.. meta::
	:description:
		Anonymous Function: A function may be instantiated, without defining a function name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous Function
	:twitter:description: Anonymous Function: A function may be instantiated, without defining a function name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anonymous Function
	:og:type: article
	:og:description: A function may be instantiated, without defining a function name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","name":"Anonymous Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"A function may be instantiated, without defining a function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anonymous Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Anonymous Function
------------------

A function may be instantiated, without defining a function name. Such functions are called anonymous. 

In PHP, they are defined as closures or arrow functions. They may also be created based on existing methods and functions, with the `...` operator.

Even without names, they are usable just like functions, or as callable.

.. code-block:: php
   
   <?php
   	$closure = function () {} ; 
   
   	$arrowFunction = fn() => 1;
   	
   	$fcs = strlen(...);
   ?>


`Documentation <https://www.php.net/manual/en/functions.anonymous.php>`__

See also https://drops-of-php.hi-folks.dev/04-functions/01-fns-anonymous/

Related : :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`, :ref:`First Class Callable <first-class-callable>`, :ref:`Closure <lambda-functions>`, :ref:`Anonymous <anonymous>`, :ref:`Arrow Functions <fn>`
