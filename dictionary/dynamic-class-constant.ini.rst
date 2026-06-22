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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dynamic Class Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:48 +0000","dateModified":"Fri, 19 Jun 2026 21:24:48 +0000","description":"Dynamic class constant access has always been possible with a call to the ``constant()`` function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Class Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Class Constant
----------------------

Dynamic class constant access has always been possible with a call to the ``constant()`` function. With the ``class::constant`` syntax, it is possible to reach any visible constant, or, also, enumeration cases.

A new syntax is available since version 8.3 to do the same: ``class::{$name}``. The curly braces are important in that call.

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


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

See also `PHP 8.3: Dynamic class constant and Enum member fetch support <https://php.watch/versions/8.3/dynamic-class-const-enum-member-syntax-support>`_.

Related : :ref:`Static Constant <class-constant>`, :ref:`Constants <constant>`, :ref:`Dynamic <dynamic>`, :ref:`Enumeration (enum) <enum>`, :ref:`Functions <function>`, :ref:`constant() <constant-function>`

Added in PHP 8.3
