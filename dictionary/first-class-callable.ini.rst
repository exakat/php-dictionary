.. _first-class-callable:
.. meta::
	:description:
		First Class Callable: First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: First Class Callable
	:twitter:description: First Class Callable: First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: First Class Callable
	:og:type: article
	:og:description: First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/first-class-callable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/first-class-callable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/first-class-callable.ini.html","name":"First Class Callable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Jun 2026 13:47:21 +0000","dateModified":"Thu, 18 Jun 2026 13:47:21 +0000","description":"First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/First Class Callable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


First Class Callable
--------------------

First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument.

First class callable may be used on functions, closures, arrow functions and methods and static methods.

The number of arguments is not important: it is the same as the actual definition of the underlying method, and will be checked at call time only.

Such closure may be created using any kind of function, such as native PHP function, or library methods.

.. code-block:: php
   
   <?php
   
       $a = foo(...);
       
       $function = strtolower(...);
       
       $closure = X::staticMethod(...);
   
   ?>


`Documentation <https://www.php.net/closure>`__

See also `PHP's First-Class Callable Syntax <https://dev.to/damms005/phps-first-class-callable-syntax-1kjl>`_.

Related : :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`Arrow Functions <fn>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Closure <lambda-functions>`, :ref:`Custom Function <custom-function>`, :ref:`Three Dots <three-dots>`

Added in PHP 8.1
