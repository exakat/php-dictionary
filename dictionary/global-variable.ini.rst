.. _global-variable:
.. meta::
	:description:
		Global Variables: Variables that reside in the global scope, and may be imported with the global keyword.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Global Variables
	:twitter:description: Global Variables: Variables that reside in the global scope, and may be imported with the global keyword
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Global Variables
	:og:type: article
	:og:description: Variables that reside in the global scope, and may be imported with the global keyword
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/global-variable.ini.html
	:og:locale: en


Global Variables
----------------

Variables that reside in the global scope, and may be imported with the global keyword.

To become a global variable, a variable may use one of the following ways : 

+ Be declared as such with the `global` keyword
+ Be created in the `$GLOBALS` variable, which is a global variable itself
+ Be created outside any function, method, closure
+ Be a super-global

Global variables provides a way to share data in different and remote scopes. It also provide a way for data to be modified by another part of the code, without warning.



.. code-block:: php
   
   <?php
   
   
   global $count;
   $count = 0;
   
   function counter() {
       global $count;
       
       // no return here
       ++$count;
   }
   
   counter(); 
   echo $count; // print 1
   counter(); 
   echo $count; // print 2
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static>`__

Related : :ref:`Variables <variable>`, :ref:`Static Variables <static-variable>`, :ref:`Variable Variables <variable-variable>`, :ref:`$GLOBALS <globals>`, :ref:`global Scope <global>`, :ref:`Superglobal Variables <superglobal>`
