.. _execution-time:
.. meta::
	:description:
		Execution Time: Execution time is a phase of PHP processing, where the source code is executed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Execution Time
	:twitter:description: Execution Time: Execution time is a phase of PHP processing, where the source code is executed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Execution Time
	:og:type: article
	:og:description: Execution time is a phase of PHP processing, where the source code is executed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/execution-time.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Execution Time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 18:29:07 +0000","dateModified":"Fri, 16 Jan 2026 18:29:07 +0000","description":"Execution time is a phase of PHP processing, where the source code is executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Execution Time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Execution Time
--------------

Execution time is a phase of PHP processing, where the source code is executed. It highly depends on the order of execution of the instructions. 

At that time, PHP takes the commands one after the other, and execute them. It allocates memory for data, and definitions. 

Execution time is related to compile time. Objects, constants (with define()), function calls, generators, inclusion, exceptions are execution time elements.

.. code-block:: php
   
   <?php
   
   const A = 'a';
   function foo(int $a = A) {
   	echo $a;
   }
   
   foo(1);  // 1
   foo();   // Error
   //Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, string given, 
   
   ?>


Related : :ref:`Compile Time <compile-time>`, :ref:`Late Static Binding <late-static-binding>`
