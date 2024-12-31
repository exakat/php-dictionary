.. _case-sensitivity:
.. meta::
	:description:
		Case Sensitivity: Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case Sensitivity
	:twitter:description: Case Sensitivity: Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive
	:twitter:creator: @exakat
	:og:title: Case Sensitivity
	:og:type: article
	:og:description: Case sensitivity refers to the way PHP retrieves names when it looks for a definition: is it in a case-sensitive way, or case insensitive
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/case-sensitivity.ini.html
	:og:locale: en


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

Case sensitivy has the potential to speed up PHP execution: the gain is a micro-optimisation, that requires millions of calls before yielding significative speed up. 

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

