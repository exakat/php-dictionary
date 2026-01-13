.. _typed-constant:
.. meta::
	:description:
		Typed Constant: A typed constant is a class constant that holds an explicit type, like a property or an argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Typed Constant
	:twitter:description: Typed Constant: A typed constant is a class constant that holds an explicit type, like a property or an argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Typed Constant
	:og:type: article
	:og:description: A typed constant is a class constant that holds an explicit type, like a property or an argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/typed-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Typed Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Aug 2025 19:28:16 +0000","dateModified":"Sun, 03 Aug 2025 19:28:16 +0000","description":"A typed constant is a class constant that holds an explicit type, like a property or an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Typed Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Typed Constant
--------------

A typed constant is a class constant that holds an explicit type, like a property or an argument. Global constants cannot be typed.

The type of a constant is usually guessed from its value, as most of the constant have a single value. A typed constant is used by the inheritance system to ensure that redefined constants, in children classes, are compatible with the original type. 

Typed constant may also be useful when the static expression uses conditions or global constants.

Typed constants were introduced in PHP 8.3. They are optional.


.. code-block:: php
   
   <?php
   
   class X {
       // expression with a condition
       const string A = B ? 'A' : 'B'; 
       // child class also provide an integer
       const int C = 3; 
       // D is defined with a global constant: Now, E also must be an integer
       const int D = E; 
   }
   
   class Y extends X {
       const int C = 13; 
   }
   
   ?>


Added in PHP 8.3+
