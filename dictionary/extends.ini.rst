.. _extends:
.. meta::
	:description:
		extends: `extends` is an operator of the class inheritance.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: extends
	:twitter:description: extends: `extends` is an operator of the class inheritance
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: extends
	:og:type: article
	:og:description: `extends` is an operator of the class inheritance
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/extends.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"extends","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 26 Apr 2025 07:21:01 +0000","dateModified":"Sat, 26 Apr 2025 07:21:01 +0000","description":"`extends` is an operator of the class inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/extends.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


extends
-------

`extends` is an operator of the class inheritance. It indicates that a class is built from another one, or an interface is built from another interface. As such, the properties, constants and methods of the parent class or interface are available to the newly created class, unless when they are marked with `private` visibility. 

`extends` is optional. 

`extends` is unique with a class : it is not possible to extends several classes at the same time. 

`extends` may be multiple with interfaces.

`extends` has a different mechanism than `implements` : `implements` provide method signature but no implementation; `extends` provides both.

.. code-block:: php
   
   <?php
   
   class X {
   	function foo() { echo "X"; }
   }
   
   class y extends x { }
   
   // Both methods are possible 
   (new x)->foo();
   (new y)->foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

See also `Stop using “extends” in PHP <https://blog.devgenius.io/stop-using-extends-in-php-37c9da1cce83>`_, https://stitcher.io/blog/extends-vs-implements

Related : :ref:`implements <implements>`
