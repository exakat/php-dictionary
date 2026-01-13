.. _nesting:
.. _nested:
.. meta::
	:description:
		Nesting: Nesting refers to the practice of placing code block or construct inside another.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nesting
	:twitter:description: Nesting: Nesting refers to the practice of placing code block or construct inside another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nesting
	:og:type: article
	:og:description: Nesting refers to the practice of placing code block or construct inside another
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nesting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Nesting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Nesting refers to the practice of placing code block or construct inside another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Nesting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Nesting
-------

Nesting refers to the practice of placing code block or construct inside another. 

This is commonly used with loops, conditional statements, functions, classes, arrays, generators, attributes, ternaries, try-catch, etc. 

Nesting creates more complex and intricate logic. It usually erodes readability by mixing two contexts in the same code location, or generating unexpected code.

.. code-block:: php
   
   <?php
   
   // Nested attributes
   #[
       MyAttribute(
           new OptionA(),
           new OptionB()
       )
   ]
   function headers() : never {
   }
   
   // Nested conditions
   if ($condition1) {
       if ($condition2) {
           // Code to run when both condition1 and condition2 are true
       } else {
           // Code to run when condition1 is true but condition2 is false
       }
   } else {
       // Code to run when condition1 is false
   }
   
   // Nested loops
   for ($i = 0; $i < 3; $i++) {
       for ($j = 0; $j < 3; $j++) {
           // Code to handle the combination of $i and $j
       }
   }
   
   // Nested functions
   function outerFunction() {
       // Code in the outer function
       
       function innerFunction() {
           // Code in the inner function
       }
       
       innerFunction(); // Call the inner function
   }
   
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Nesting_(computing)>`__

See also `PHP Nested Try-Catch <https://rollbar.com/blog/php-nested-try-catch/#>`_
