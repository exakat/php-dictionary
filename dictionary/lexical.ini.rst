.. _lexical-variable:
.. meta::
	:description:
		Lexical variable: A lexical variable is the type of variable that appears in the ``use`` part of a closure definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lexical variable
	:twitter:description: Lexical variable: A lexical variable is the type of variable that appears in the ``use`` part of a closure definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lexical variable
	:og:type: article
	:og:description: A lexical variable is the type of variable that appears in the ``use`` part of a closure definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lexical-variable.ini.html
	:og:locale: en


Lexical variable
----------------

A lexical variable is the type of variable that appears in the ``use`` part of a closure definition. They are both variables of the current scope, which defines the closure, and parameters of the scope of the closure.

.. code-block:: php
   
   <?php
   
   $c = 1;
   
   function ($a, $b) use ($c) {
       // doSomething();
   }
   
   ?>

