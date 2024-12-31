.. _global:
.. meta::
	:description:
		global Scope: The global scope is the top level scope.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: global Scope
	:twitter:description: global Scope: The global scope is the top level scope
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: global Scope
	:og:type: article
	:og:description: The global scope is the top level scope
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/global.ini.html
	:og:locale: en


global Scope
------------

The global scope is the top level scope. It is the scope when no function, or method scope is active. It is also the first scope when starting execution. 

Variables from the global scope are accessible in other scopes by using the `global` keyword, or the $GLOBALS variable. Variables in the global scope are automatically added to the $GLOBALS variable; in local scopes, the `global` keyword have that effect too.


.. code-block:: php
   
   <?php
   
   $x = 'A';
   
   function counter() {
       echo $GLOBALS['A'];
   
   	global $x;
   	
   	echo $x;
   }
   
   foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.globals.php>`__

Related : :ref:`Variables <variable>`, :ref:`Static Variables <static-variable>`, :ref:`Variable Variables <variable-variable>`, :ref:`Global Variables <global-variable>`
