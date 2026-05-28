.. _case-sensitivity:
.. _case-insensitive:
.. meta::
	:description:
		Case Sensitivity: Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case Sensitivity
	:twitter:description: Case Sensitivity: Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Case Sensitivity
	:og:type: article
	:og:description: Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/case-sensitivity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Case Sensitivity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Case Sensitivity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Case Sensitivity
----------------

Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive.

The case insensitive named structures are: 

+ Classes
+ Enumerations
+ Functions
+ Interfaces
+ Magic methods
+ Magic constants
+ Named parameters
+ Methods
+ Namespaces
+ PHP keywords
+ Traits

The case sensitive named structures are: 

+ Class constants
+ Global constants, since PHP 8.0
+ Array index
+ Properties
+ Variables

Case sensitivity has the potential to speed up PHP execution: the gain is a micro-optimisation, that requires millions of calls before yielding significant speed up. 

The different case sensitivities in the language is balanced by the common practice to use the original case when using a structure.

.. code-block:: php
   
   <?php
   
       // two distinct variables
       $x = 1;
       $X = 2;
       
       // two identical calls
       foo();
       FOO();
       
       // Calling a class with its definition case
       $db = new SQLite3(); 
       // This is valid, and often reported by tools and conventions
       $db = new SQLite3(); 
   
   ?>


See also `Unraveling the Quest for the Fastest Case Insensitive Char Comparison in PHP <https://www.exakat.io/unraveling-the-quest-for-the-fastest-case-insensitive-char-comparison-in-php/>`_.

Related : :ref:`Name <name>`, :ref:`String <string>`
