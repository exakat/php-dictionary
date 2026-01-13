.. _constant:
.. _global-constant:
.. meta::
	:description:
		Constants: Constants are named values, that never change.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants
	:twitter:description: Constants: Constants are named values, that never change
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constants
	:og:type: article
	:og:description: Constants are named values, that never change
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Jul 2025 19:57:27 +0000","dateModified":"Mon, 28 Jul 2025 19:57:27 +0000","description":"Constants are named values, that never change","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constants
---------

Constants are named values, that never change. 

Constants may be created with the const keyword or the define() function. They may be tested for existence with the defined() function.

There are global constants, which are accessible with their name and their namespaces. There are also constants in classes, interfaces, enums and traits. Those are called class constant.

Constants are namespace dependant. They can be imported using the ``use const`` command. 

Constants are usually written in uppercase. 

Global constants used to be case insensitive, when created with ``define()``. This feature was removed in PHP 8. Nowadays, both ``const`` and ``define`` create case insensitive values.


.. code-block:: php
   
   <?php
   
   const A = 1;
   define('B', 2);
   
   // displays 1
   echo A;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.php>`__

Related : :ref:`Static Constant <class-constant>`, :ref:`Centralization <centralization>`, :ref:`Constant Scalar Expression <constant-scalar-expression>`, :ref:`Dynamic Constant <dynamic-constant>`, :ref:`New In Initializers <new-in-initializer>`, :ref:`Predefined Constants <predefined-constant>`
