.. _dynamic-class-constant:
.. meta::
	:description:
		Dynamic Class Constant: Dynamic class constant access has always been possible with a call to the ``constant()`` function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Class Constant
	:twitter:description: Dynamic Class Constant: Dynamic class constant access has always been possible with a call to the ``constant()`` function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Class Constant
	:og:type: article
	:og:description: Dynamic class constant access has always been possible with a call to the ``constant()`` function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-class-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Dynamic Class Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Oct 2025 17:19:55 +0000","dateModified":"Wed, 01 Oct 2025 17:19:55 +0000","description":"Dynamic class constant access has always been possible with a call to the ``constant()`` function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Class Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Class Constant
----------------------

Dynamic class constant access has always been possible with a call to the ``constant()`` function. With the ``class::constant`` syntax, it is possible to reach any visible constant, or, also, enumeration cases.

In PHP 8.3, a new syntax is available to do the same: ``class::{$name}``. The curly braces are important in that call.


.. code-block:: php
   
   <?php
   
   enum E: string {
       case A = 'abc';
       const B = 'def';
   }
   
   $name = 'E::A';
   echo constant($name)->value;
   // PHP 8.3+ 
   echo E::{$name}->value;
   
   $name = 'E::B';
   echo constant($name);
   // PHP 8.3+ 
   echo E::{$name};
   
   ?>


See also https://php.watch/versions/8.3/dynamic-class-const-enum-member-syntax-support
