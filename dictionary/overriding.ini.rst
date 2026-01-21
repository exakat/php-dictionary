.. _overriding:
.. meta::
	:description:
		Overriding: Overriding in PHP is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Overriding
	:twitter:description: Overriding: Overriding in PHP is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Overriding
	:og:type: article
	:og:description: Overriding in PHP is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/overriding.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/%s::%s() has #[\\Override] attribute, but no matching parent method exists.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/%s::%s() has #[\\Override] attribute, but no matching parent method exists.html","name":"Overriding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:22:11 +0000","dateModified":"Tue, 20 Jan 2026 07:22:11 +0000","description":"Overriding in PHP is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Overriding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Overriding
----------

Overriding in PHP is an OOP concept where a child class provides its own implementation of a method that already exists in a parent class.

Child classes may override constant values, properties and methods. 

When overriding, visibility cannot be reduced. A ``protected`` method or constant may become ``public``, but not ``private``. A constant

The ``#[Override]`` attribute is a helper tool to ensure that a child method overrides a parent method. It is the complement of the ``abstract`` keyword.

Incompatible overriding is not always detected at linting time: this happens when the overriding definition is parsed before the overriden definition.

.. code-block:: php
   
   <?php
   
   class MyParentClass {
   	function foo() {}
   }
   
   class MyChildClass {
   	function foo() {}
   }
   
   ?>


See also https://www.geeksforgeeks.org/php/function-overloading-and-overriding-in-php/

Related : :ref:`Override Attribute <override>`, :ref:`Abstract Keyword <abstract>`

Added in PHP 7.0+
