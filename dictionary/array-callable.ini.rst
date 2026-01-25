.. _array-callable:
.. meta::
	:description:
		Callable Arrays: An callable array is an array with index ``0`` and ``1``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Callable Arrays
	:twitter:description: Callable Arrays: An callable array is an array with index ``0`` and ``1``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Callable Arrays
	:og:type: article
	:og:description: An callable array is an array with index ``0`` and ``1``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array-callable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Callable Arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 21:18:18 +0000","dateModified":"Thu, 22 Jan 2026 21:18:18 +0000","description":"An callable array is an array with index ``0`` and ``1``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Callable Arrays.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Callable Arrays
---------------

An callable array is an array with index ``0`` and ``1``. The first index is a string, that represents a valid class, or an object. The second argument is a string, which is a method name.

With such a configuration, it is possible to use that array as a callback: either with a static  method call, or a normal method call.

.. code-block:: php
   
   <?php
   
   class X {
       static function foo() { echo __METHOD__;}
              function goo() { echo __METHOD__;}
   }
   
   $callable1 = [new X, 'goo'];
   $callable1(); // X::goo
   
   $callable2 = ['X', 'foo']; 
   $callable2(); // X::foo
   
   $callable3 = [X::class, 'foo']; 
   $callable3(); // X::foo
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.callable.php>`__

See also https://markbakeruk.net/2021/12/22/the-wonderful-world-of-callbacks/

Related : :ref:`Callables <callable>`, :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`
