.. _type-declaration-property:

Property Type Declaration
-------------------------

Type declaration property, also known as typed properties, is a feature introduced in PHP 7.4 that allows to specify the type of a class property. 

With type declaration properties, the type of a property is explicitly defined, ensuring that only values of the specified type can be assigned to that property. This helps enforce type safety and prevents accidental assignments of incompatible values.

Typed properties support any type format : simple, union, intersectional or DNF. 


.. code-block:: php
   
   <?php
   
   class x {
       private Typed $y;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

Related : :ref:`Type System <type>`, :ref:`Union Type <union-type>`, :ref:`Intersection Type <intersection-type>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`

Added in PHP 7.4
