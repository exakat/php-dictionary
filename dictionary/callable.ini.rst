.. _callable:
.. meta::
	:description:
		Callables: A callable is an object that can pass the ``callable`` type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Callables
	:twitter:description: Callables: A callable is an object that can pass the ``callable`` type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Callables
	:og:type: article
	:og:description: A callable is an object that can pass the ``callable`` type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/callable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to undefined function goo().html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to undefined function goo().html","name":"Callables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"A callable is an object that can pass the ``callable`` type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Callables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Callables
---------

A callable is an object that can pass the ``callable`` type. 

A callable may be a callback function or method, represented as a string, a closure or an arrow function. 

Objects may also be callable, when their class implement the magic method ``__invoke()``.

.. code-block:: php
   
   <?php
   
   function foo() { echo __METHOD__; }
   
   call_user_func('foo');
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.callable.php>`__

See also https://www.designcise.com/web/tutorial/what-is-the-callable-type-in-php

Related : :ref:`Callbacks <callback>`, :ref:`Closure <closure>`, :ref:`__invoke() Method <-__invoke>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Callable Arrays <array-callable>`, :ref:`Call <call>`, :ref:`Pseudo-type <pseudo-type>`, :ref:`Special Types <special-typehint>`
