.. _global:

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
