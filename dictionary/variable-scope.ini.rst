.. _variable-scope:
.. meta::
	:description:
		Variable Scope: Variable scope is the context in which the variable is available.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variable Scope
	:twitter:description: Variable Scope: Variable scope is the context in which the variable is available
	:twitter:creator: @exakat
	:og:title: Variable Scope
	:og:type: article
	:og:description: Variable scope is the context in which the variable is available
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable-scope.ini.html
	:og:locale: en


Variable Scope
--------------

Variable scope is the context in which the variable is available. The context is often one method or function. 

``global`` keywords allows variables from other contexts to be available in the current one. 

Local variables are only available in one method or function, not counting the local or bind closures or arrow functions. 


.. code-block:: php
   
   <?php
   
   function foo() {
   	// $a is only available in foo
   	$a = 1;
   }
   
   function bar() {
   	// $a is only available in bar, and is distinct from the one in foo()
   	$a = 2;
   
   	// $bar is only available in bar, the followring closure and the arrow function
   	$b = 1;
   	
   	$c = function() use ($b) { return $b;}
   	$d = function() use ($b) { return $b;}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.scope.php>`__
