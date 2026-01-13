.. _unreachable-code:
.. meta::
	:description:
		Unreachable Code: Unreachable code refers to a section of code within a program that can never be executed during the program's runtime.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unreachable Code
	:twitter:description: Unreachable Code: Unreachable code refers to a section of code within a program that can never be executed during the program's runtime
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unreachable Code
	:og:type: article
	:og:description: Unreachable code refers to a section of code within a program that can never be executed during the program's runtime
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unreachable-code.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Unreachable Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Unreachable code refers to a section of code within a program that can never be executed during the program's runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Unreachable Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Unreachable Code
----------------

Unreachable code refers to a section of code within a program that can never be executed during the program's runtime. It means that the code is written in such a way that it can never be reached or accessed by the program's execution flow.

Unreachable code can occur due to several reasons:

+ Conditional statements
+ Early return statements
+ Infinite loops
+ Branching with goto, yield, break, return, die...



.. code-block:: php
   
   <?php
   
   $a = 1;
   echo foo($a);
   
   exit; 
   
   // This is unreachable code, as it will never be executed
   echo $a; 
   
   // This is not unreachable, as PHP scoops the definition at linting time
   function foo($s) {
   	return strtolower($s);
   }
   
   ?>

