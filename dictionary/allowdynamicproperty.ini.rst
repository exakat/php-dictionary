.. _allowdynamicproperty:

Allow Dynamic Property
----------------------

This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them.

This attribute may be added to any class. It is not necessary with `stdClass`.


.. code-block:: php
   
   <?php
   
   class MyClass {
   	function foo() {
   		// creation of a property, without prior definition
   		// This yields an error
   		$this->p  = 1;
   	}
   }
   
   #[AllowDynamicProperty]
   class MyOtherClass {
   	function foo() {
   		// creation of a property, without prior definition
   		// This doesn't yields an error
   		$this->p  = 1;
   	}
   }
   
   class MyThirdClass extends Stdclass {
   	function foo() {
   		// creation of a property, without prior definition
   		// This doesn't yields an error, yet no attribute
   		$this->p  = 1;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.attributes.classes.php>`__

Added in PHP 8.2+
