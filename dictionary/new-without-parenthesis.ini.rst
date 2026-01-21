.. _new-without-parenthesis:
.. meta::
	:description:
		New Without Parenthesis: The ``new`` operator may be called without using the parenthesis after the class name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: New Without Parenthesis
	:twitter:description: New Without Parenthesis: The ``new`` operator may be called without using the parenthesis after the class name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: New Without Parenthesis
	:og:type: article
	:og:description: The ``new`` operator may be called without using the parenthesis after the class name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/new-without-parenthesis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"New Without Parenthesis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"The ``new`` operator may be called without using the parenthesis after the class name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/New Without Parenthesis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


New Without Parenthesis
-----------------------

The ``new`` operator may be called without using the parenthesis after the class name.

The parenthesis are necessary when the constructor requires at least one argument. They are optional when no argument is necessary.

It is usually recommended to always use the parenthesis, to keep the syntax consistent across various situations.

This should not be confused with chaining new without parenthesis, where the parenthesis are enclosing the ``new`` call.

.. code-block:: php
   
   <?php
   
   class X { } // no constructor, no argument
   
   new X;
   new X();
   new X(2); // possible, but useless
   
   class Y { 
       function __construct($i = 0) {}
   } 
   
   new Y;
   new Y();
   new Y(2); 
   
   class Z { 
       function __construct($h, $i = 0) {}
   } 
   
   new Y(1);
   new Y(1, 2);
   
   ?>


Related : :ref:`new <new>`, :ref:`__invoke() Method <-__invoke>`, :ref:`Chaining New Without Parenthesis <chaining-new-without-parenthesis>`
