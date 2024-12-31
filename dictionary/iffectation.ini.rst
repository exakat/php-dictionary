.. _iffectation:
.. meta::
	:description:
		Iffectation: An iffection is both an assignation and a condition at the same time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Iffectation
	:twitter:description: Iffectation: An iffection is both an assignation and a condition at the same time
	:twitter:creator: @exakat
	:og:title: Iffectation
	:og:type: article
	:og:description: An iffection is both an assignation and a condition at the same time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iffectation.ini.html
	:og:locale: en


Iffectation
-----------

An iffection is both an assignation and a condition at the same time. 

Assignation is a condition is debated. It makes the code less readable, as the assignation is hidden in the if condition.

It also saves some extra lines of code, when the condition applies to something that will immediately be used. 



.. code-block:: php
   
   <?php
   
   if ($x = foo()) { }
   
   // same, without the iffectation
   $x = foo();
   if ($x) { }
   
   
   ?>

