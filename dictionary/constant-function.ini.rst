.. _constant-function:
.. meta::
	:description:
		constant(): The ``constant()`` function is a PHP native function, which provide the value of a declared global constant, a class constant or an enumeration case.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: constant()
	:twitter:description: constant(): The ``constant()`` function is a PHP native function, which provide the value of a declared global constant, a class constant or an enumeration case
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: constant()
	:og:type: article
	:og:description: The ``constant()`` function is a PHP native function, which provide the value of a declared global constant, a class constant or an enumeration case
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"constant()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Oct 2025 20:15:43 +0000","dateModified":"Wed, 01 Oct 2025 20:15:43 +0000","description":"The ``constant()`` function is a PHP native function, which provide the value of a declared global constant, a class constant or an enumeration case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/constant().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


constant()
----------

The ``constant()`` function is a PHP native function, which provide the value of a declared global constant, a class constant or an enumeration case.

For class constant and enumeration cases, it may be replaced with the dynamic class constant syntax, introduced in PHP 8.3.


.. code-block:: php
   
   <?php
   
   const A = 1;
   
   echo constant('A');
   
   enum E: string {
       case B = 'abc';
       const C = 'def';
   }
   
   echo constant('E::B')->value; // abc
   echo constant('E::C');        // def
   
   ?>


`Documentation <https://www.php.net/constant>`__

Related : :ref:`Dynamic Class Constant <dynamic-class-constant>`
