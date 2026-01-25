.. _chaining-new-without-parenthesis:
.. meta::
	:description:
		Chaining New Without Parenthesis: Since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Chaining New Without Parenthesis
	:twitter:description: Chaining New Without Parenthesis: Since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Chaining New Without Parenthesis
	:og:type: article
	:og:description: Since PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/chaining-new-without-parenthesis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Chaining New Without Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:13 +0000","dateModified":"Sun, 25 Jan 2026 20:46:13 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Chaining New Without Parenthesis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Chaining New Without Parenthesis
--------------------------------

Since PHP 8.4, it is possible to call a method, access a property or call the __invoke() method immediately upon instantiation, without parenthesis around the instantiation.

With this syntax, there must be parenthesis, albeit empty ones, after the ``new``.

This should not be confused with calling ``new`` without parenthesis for the constructor.

.. code-block:: php
   
   <?php
   
   class X {
       public $property = 1;
       
       public function foo() { echo __METHOD__; }
       
       public function __invoke() { echo __METHOD__; }
   }
   
   new x()->property;  // 1
   new x()->foo();     // X::foo
   new x()();          // X::__invoke
   
   ?>


`Documentation <https://www.php.net/manual/en/migration84.new-features.php#migration84.new-features.core.new-chaining>`__

Related : :ref:`new <new>`, :ref:`New Without Parenthesis <new-without-parenthesis>`

Added in PHP 8.4
