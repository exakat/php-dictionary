.. _uninitialized:
.. meta::
	:description:
		Uninitialized: A data container, such as variable, property, array index is uninitialized, when it is used for reading, while no value was provided so far.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Uninitialized
	:twitter:description: Uninitialized: A data container, such as variable, property, array index is uninitialized, when it is used for reading, while no value was provided so far
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Uninitialized
	:og:type: article
	:og:description: A data container, such as variable, property, array index is uninitialized, when it is used for reading, while no value was provided so far
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uninitialized.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Uninitialized","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 19:54:49 +0000","dateModified":"Sun, 16 Nov 2025 19:54:49 +0000","description":"A data container, such as variable, property, array index is uninitialized, when it is used for reading, while no value was provided so far","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Uninitialized.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Uninitialized
-------------

A data container, such as variable, property, array index is uninitialized, when it is used for reading, while no value was provided so far. 

Different behaviors happen, depending on the type of data container.

+ Variable: a warning is emitted, and the variable's content is actually ``null``. The variable stays undefined.
+ Static Property: a Fatal error is emitted.
+ Undefined Normal Property: A warning is emitted. The property's content is actually ``null``.
+ Untyped Normal Property without default value: The property's content is actually ``null``. No warning nor error.
+ Typed Normal Property without default value: a fatal error is emitted.
+ Property with default value: the default value is used.



.. code-block:: php
   
   <?php
   
   echo $a; //  Undefined variable $a
   
   class A {
       public int $b;
   }
   
   echo A::$a; // Access to undeclared static property A::$a
   new A()->a; // 
   new A()->b; // Typed property A::$b must not be accessed before initialization
   
   ?>

