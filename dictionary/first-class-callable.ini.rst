.. _first-class-callable:
.. meta::
	:description:
		First Class Callable: In PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: First Class Callable
	:twitter:description: First Class Callable: In PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: First Class Callable
	:og:type: article
	:og:description: In PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/first-class-callable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"First Class Callable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 16:55:03 +0000","dateModified":"Fri, 04 Jul 2025 16:55:03 +0000","description":"In PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/First Class Callable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


First Class Callable
--------------------

In PHP 8.1, a new feature called 'First Class Callable Syntax' was introduced. It allows to create a closure directly, by using the triple dot operator as an argument.

Such closure may be created using any kind of function, such as native PHP function, or library methods. 


.. code-block:: php
   
   <?php
   
   $a = foo(...);
   
   $function = strtolower(...);
   
   ?>


`Documentation <https://www.php.net/closure>`__

See also `PHP's First-Class Callable Syntax <https://dev.to/damms005/phps-first-class-callable-syntax-1kjl>`_

Related : :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`Arrow Functions <fn>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Closure <lambda-functions>`

Added in PHP 8.1
