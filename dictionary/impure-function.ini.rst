.. _impure-function:
.. meta::
	:description:
		Impure Function: An impure function is a function that has at least one of the following characteristics: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Impure Function
	:twitter:description: Impure Function: An impure function is a function that has at least one of the following characteristics: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Impure Function
	:og:type: article
	:og:description: An impure function is a function that has at least one of the following characteristics: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/impure-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Impure Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"An impure function is a function that has at least one of the following characteristics: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Impure Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Impure Function
---------------

An impure function is a function that has at least one of the following characteristics: 

+ Non-deterministic: for the same input, an impure function may return different output. For example, ``date()`` and ``random_string()`` return different values for each call, by definition. 
+ Create side-effect: an impure function modify a state: a global variable, a row in a table, a lock, a file or data. This may affect any subsequent call to this function, leading to the previous characteristic. 

A function that is not impure is a pure function. 

This notion applies to functions, methods, native and custom functions, closures and arrow functions. 


.. code-block:: php
   
   <?php
   
       echo random_string(0, 10);
       
       // an impure function: 
       // the static variable is a state that changes over time
       function foo() {
           static $x = 0;
           
           return $x++;
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Pure_function>`__

See also `Pure vs Impure Functions in Functional Programming – What's the Difference? <https://www.freecodecamp.org/news/pure-function-vs-impure-function/>`_.

Related : :ref:`Functions <function>`, :ref:`Method <method>`, :ref:`Return <return>`, , :ref:`Side Effect <side-effect>`, :ref:`Pure Function <pure-function>`
