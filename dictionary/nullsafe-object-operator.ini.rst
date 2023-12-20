.. _nullsafe-object-operator:

Null Safe Object Operator
-------------------------

The Null Safe Object Operator behaves like the object operator, until the object is null. Then, instead of failing with a fatal error, it returns null. 

.. code-block:: php
   
   <?php
   
   function foo() : ?A {}
   
   class A {
       public $property = 1;
   }
   
   // This will not fail, but also display nothing
   echo foo()?->property;
   
   // This will fail, when foo() returns null
   echo foo()->property;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.nullsafe>`__

See also `This nullsafe operator could come in PHP 8 <https://www.amitmerchant.com/nullsafe-operator-php/>`_, `Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator <https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b/>`_, `An Introduction to PHP 8.0's Null Safe Operator <https://www.atatus.com/blog/the-null-safe-operator/>`_, `Null safe operator in practice <https://www.exakat.io/en/null-safe-operator-in-practice/>`_

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Scope Resolution Operator :: <scope-resolution-operator>`

Added in PHP 8.0+
