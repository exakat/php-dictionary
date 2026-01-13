.. _closure-class:
.. meta::
	:description:
		Closure Class: ``Closure`` is a PHP native class that is the result of the closure syntax.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closure Class
	:twitter:description: Closure Class: ``Closure`` is a PHP native class that is the result of the closure syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Closure Class
	:og:type: article
	:og:description: ``Closure`` is a PHP native class that is the result of the closure syntax
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/closure-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Closure Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Dec 2025 06:04:09 +0000","dateModified":"Tue, 02 Dec 2025 06:04:09 +0000","description":"``Closure`` is a PHP native class that is the result of the closure syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Closure Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Closure Class
-------------

``Closure`` is a PHP native class that is the result of the closure syntax. It is also the result of an arrow function syntax, and a call to first class callable. 

The ``Closure`` class offers methods to call the closure, bind it to new objects, or create more, from a callable.


.. code-block:: php
   
   <?php
   
   $closure = function ($a) use ($b) {
       return $a + $b + 1;
   };
   var_dump($closure);
   
   $arrowFunction = fn () => 1;
   var_dump($arrowFunction);
   
   $firstClassCallable = strtolower(...);
   var_dump($firstClassCallable);
   
   ?>


`Documentation <https://www.php.net/manual/en/class.closure.php>`__

Related : :ref:`Closure <closure>`
