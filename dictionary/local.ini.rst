.. _local:
.. _local-scope:

Local Scope
-----------

The local scope is the scope inside a function or method. The variables are contained within that scope, and are not available beyond it. 

The opposite of local scope is the global scope. 



.. code-block:: php
   
   
   <?php
   
   function foo() {
   	// $foo variable is only available in the foo scope
   	$foo = 1; 
   	
   	$closure = function () {
   		// this scope is different from foo()
   		// its definition is nested in the foo() function
   		// but those are 2 distinct scopes
   	};
   }
   
   function goo() {
   	// $goo variable is only available in the goo scope
   	$goo = 1; 
   }
   ?>
   


`Documentation <https://www.php.net/manual/en/language.variables.scope.php>`__

Related : :ref:`Scope <scope>`, :ref:`global Scope <global>`
