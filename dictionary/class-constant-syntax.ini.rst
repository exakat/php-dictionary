.. _class-constant-syntax:
.. meta::
	:description:
		Class Constant Syntax: The class constant syntax is the full name of a class constant, formalized in a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Constant Syntax
	:twitter:description: Class Constant Syntax: The class constant syntax is the full name of a class constant, formalized in a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Constant Syntax
	:og:type: article
	:og:description: The class constant syntax is the full name of a class constant, formalized in a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-constant-syntax.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Class Constant Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Oct 2025 20:21:04 +0000","dateModified":"Wed, 01 Oct 2025 20:21:04 +0000","description":"The class constant syntax is the full name of a class constant, formalized in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Constant Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Constant Syntax
---------------------

The class constant syntax is the full name of a class constant, formalized in a string. It is ``namespace\class-name::constant-name``.

That representation requires the name of the class to be include the full namespace path, with or without the leading ``\``.

The class constant syntax does not work with local ``use`` expressions.

The class constant syntax works with the ``constant()`` and ``defined()`` functions.

.. code-block:: php
   
   <?php
   
   namespace X\Y;
   
   use A as D;
   
   class A {
       const B = 'C';
   }
   
   echo constant('\X\Y\A::B');
   echo constant('X\Y\A::B');
   echo constant('D::B'); // error, no such class as D
   
   ?>


Related : :ref:`Static Constant <class-constant>`, :ref:`Constants <constant>`, :ref:`defined() <defined>`, :ref:`constant() <constant-function>`
