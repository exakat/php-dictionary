.. _override:

Override Parent Method
----------------------

This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent.

The overriden method may be in the parent, or any subsequent parent; it may also be defined in a trait, as a concrete definition or an alias.

The error is only reported at execution time. The same error message is used if the class has no parent, at linting time.

This attribute may be added to any method.


.. code-block:: php
   
   <?php
   
   class MyParentClass {
   	function foo() {}
   }
   
   class MyChildClass {
   	#[Override]
   	function foo() {}
   
   	#[Override]
   	function goo() {}
   	// This raise an error, as goo() has no definition in the parent.
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.attributes.classes.php>`__

Added in PHP 8.2+
