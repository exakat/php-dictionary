.. _compile-time:
.. _lint-time:
.. _linting-time:
.. meta::
	:description:
		Compile Time: Compile time is a phase of PHP processing, where the source code is transformed into execution commands.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compile Time
	:twitter:description: Compile Time: Compile time is a phase of PHP processing, where the source code is transformed into execution commands
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Compile Time
	:og:type: article
	:og:description: Compile time is a phase of PHP processing, where the source code is transformed into execution commands
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compile-time.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Compile Time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:18 +0000","dateModified":"Sun, 25 Jan 2026 20:46:18 +0000","description":"Compile time is a phase of PHP processing, where the source code is transformed into execution commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Compile Time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Compile Time
------------

Compile time is a phase of PHP processing, where the source code is transformed into execution commands. 

At that time, PHP figures out the syntax and code organisation, and also validates some aspects of the code, depending on the information availability. The information availability may depend on execution: for example, PHP validate interfaces when they are in the same file as the implementing class, but not when they are in different files, as autoloading() needs to happen.

In particular, during compile time, PHP has only visibility on the current constant definitions (no inclusion, no define()). It has not result from any function call, or variables. 

Compile time is related to execution time and late static binding. Attributes, default values, constants (with ``const``) are fully compile time structures.

.. code-block:: php
   
   <?php
   
   const S = 'abc'; 
   
   class y {
       const T = 'abc';
       const string U = z::A ? '2' : 'abc'; // PHP waits for z 
   }
   
   class x {
      private int $a = S;     // execution time 
      //private int $b = y::T;  // compile time error
      private int $c = y::U;  // execution time error
   }
   
   ?>


Related : :ref:`Execution Time <execution-time>`, :ref:`Late Static Binding <late-static-binding>`
