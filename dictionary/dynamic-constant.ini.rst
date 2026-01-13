.. _dynamic-constant:
.. meta::
	:description:
		Dynamic Constant: A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Constant
	:twitter:description: Dynamic Constant: A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Constant
	:og:type: article
	:og:description: A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dynamic Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Oct 2025 17:14:19 +0000","dateModified":"Wed, 01 Oct 2025 17:14:19 +0000","description":"A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Constant
----------------

A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time. 

Reaching a constant's value is done by using the constant() function, or the dynamic constant fetch with classes. 

Sometimes, dynamic constants are also called variable constants.

.. code-block:: php
   
   <?php
   
   const A = 1;
   // simple case
   $a = 'A';
   echo constant($a); // displays 1
   
   // with leading backslash
   $b = '\A';
   echo constant($b); // displays 1
   
   // definition has no leading backslash
   define('B\C', d);
   // reading has no leading backslash, or not
   $c = '\b\C';
   echo constant($c); // displays d
   $c = 'b\C';
   echo constant($c); // displays d
   
   // constant() works also on class constants.
   class D {
       const E = 'f';
   }
   echo constant('d::E'); // displays f
   
   // dynamic constant access on classes or enumeration
   $k = 'E';
   echo D::{$k}; // f
   
   // constant works also on enumeration cases
   enum I: string {
       case G = 'h';
   }
   echo constant('I::G')->value; // displays h
   
   // dynamic constant access on classes or enumeration
   $g = 'G';
   echo I::{$g}->value; // h
   
   ?>


`Documentation <https://www.php.net/manual/en/function.constant.php>`__

See also https://www.exakat.io/all-the-dynamic-syntaxes-in-php/

Related : :ref:`Constants <constant>`, :ref:`constant() <constant-function>`, :ref:`Class Constant Syntax <class-constant-syntax>`, :ref:`Static Constant <class-constant>`, :ref:`Dynamic <dynamic>`
