.. _case-sensitivity:
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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Case Sensitivity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 15:58:52 +0000","dateModified":"Wed, 06 Aug 2025 15:58:52 +0000","description":"Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Case Sensitivity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Case Sensitivity
----------------

Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive.

The case insensitive named structures are: 

+ classes
+ enumerations
+ functions
+ interfaces
+ magic methods
+ magic constants
+ named parameters
+ methods
+ namespaces
+ php keywords
+ traits

The case sensitive named structures are: 

+ class constants
+ constants (since PHP 8.0)
+ array index
+ properties
+ variables

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
   $db = new Sqlite3(); 
   // This is valid, and often reported by tools and conventions
   $db = new sqlite3(); 
   
   ?>


See also https://www.exakat.io/unraveling-the-quest-for-the-fastest-case-insensitive-char-comparison-in-php/

Related : :ref:`Name <name>`, :ref:`String <string>`
