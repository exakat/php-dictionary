.. _conditional-structure:
.. meta::
	:description:
		Conditional Structures: Conditional structures are instructions which run different code, based on a condition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Conditional Structures
	:twitter:description: Conditional Structures: Conditional structures are instructions which run different code, based on a condition
	:twitter:creator: @exakat
	:og:title: Conditional Structures
	:og:type: article
	:og:description: Conditional structures are instructions which run different code, based on a condition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/conditional-structure.ini.html
	:og:locale: en


Conditional Structures
----------------------

Conditional structures are instructions which run different code, based on a condition. 

This includes if-elsif-then, switch(), match(), the ternary operators `? ... :` and `?:` and the Coalesce operator `??`.



.. code-block:: php
   
   <?php
   
   if (!function_exists('foo')) {
       function foo() {
           // doSomething
       }
   }
   
   ?>


Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`If Then Else <if-then>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Ternary Operator <ternary-operator>`
