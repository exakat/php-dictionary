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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Anonymous Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Jun 2026 16:46:31 +0000","dateModified":"Tue, 02 Jun 2026 16:46:31 +0000","description":"A function may be instantiated, without defining a function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anonymous Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Anonymous Function
------------------

A function may be instantiated, without defining a function name. Such functions are called anonymous. 

Anonymous functions are defined as closures or arrow functions. They may also be created based on existing methods and functions, with the ``...`` operator.

Even without names, they are usable like functions, or as callable.

Methods cannot be anonymous, but it is possible to call a method without mentioning its name by using the ``__invoke`` magic method.


.. code-block:: php
   
   <?php
   
       $closure = function () {} ; 
   
       $arrowFunction = fn() => 1;
       
       $fcs = strlen(...);
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.anonymous.php>`__

See also `Anonymous functions in PHP <https://drops-of-php.hi-folks.dev/04-functions/01-fns-anonymous/>`_.

Related : :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`, :ref:`First Class Callable <first-class-callable>`, :ref:`Closure <lambda-functions>`, :ref:`Anonymous <anonymous>`, :ref:`Arrow Functions <fn>`, :ref:`__invoke() Method <-__invoke>`
