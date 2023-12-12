.. _object-operator:

Object Operator ->
------------------

The Object Operator is the operator to access properties and methods from an object. It is ``->``, sometimes called the arrow. 

Depending on the context, those properties and methods must be public, protected or private. When the visibility is not valid, or if the method doesn't exists, PHP yields a Fatal error. Accessing an undefined property is a warning. 

Object Nullsafe Operator is directly related to the Object operator : the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.

.. code-block:: php
   
   <?php
   
   class A {
       public $property = 1;
       
       function foo() {
           return __CLASS__;
       }
   }
   
   $a = new a();
   
   // displays 1
   echo $a->property; 
   
   // displays \A
   echo $a->foo(); 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods>`__

Related : :ref:`Null Safe Object Operator <nullsafe-object-operator>`, :ref:`Scope Resolution Operator :: <scope-resolution-operator>`
