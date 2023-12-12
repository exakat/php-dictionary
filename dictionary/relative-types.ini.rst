.. _relative-types:

Relative Types
--------------

Relative types are types that are not explicit, but relative to the current class. There are three relative types : 

+ static : this represents the current calling class. It is important when the class is not directly called, but one of its children is. 
+ self : this represents the current class, at compilation time. 
+ parent : this represents the first available parent of the current class. It usually is the direct parent, but may skip classes when the requested resource is not available, as in method calls. 



.. code-block:: php
   
   <?php
   
   class x extends y {
   	function foo() : self {}
   	function hoo() : static {}
   	function ioo() : parent {}	
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.relative-class-types.php>`__

Related : :ref:`Scalar Types <scalar-typehint>`, :ref:`Union Type <union-type>`, :ref:`Literal types <literal-types>`, :ref:`Intersection Type <intersection-type>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`
