.. _declaration:

Declaration
-----------

A declaration is a statement that defines a structure, such as a function, a class, method, property, etc. A declaration must occur before the usage of the declared resource.

PHP requires a declaration for some structures, and allows its omittion for others. For example, a class must be declared before usage, while a variable can be used without declaration. Properties are currently being moved to a compulsory declaration.


.. code-block:: php
   
   <?php
   
   // cannot call a function before defining it
   foo();
   
   function foo() {}
   
   class x {
   	function goo() {
   		// This is a warning since PHP 8.2, planned to be a fatal error in PHP 9.0
   		$this->undeclaredProperty = 1;
   		
   		// $b is undefined. It creates a warning, but the code keeps executing.
   		$a = $b + 1;
   	}
   }
   
   ?>

