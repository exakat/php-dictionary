.. _overwrite:
.. _overloading:
.. _overloaded:

Overwrite
---------

Overwriting is the process to replace a method, property or constant that was defined in a parent, by a local definition. This is related to OOP programming and inheritance.

Overwriting is applicable to constants, methods and properties. Methods still should have a compatible signature with their parent's equivalent, while properties and constants may change their (default) value.

Overwriting is prevented by the ``final`` keyword, or the ``private`` visibility.

Overwriting is also called overloading. 


.. code-block:: php
   
   <?php
   
   class x {
       const Y = 1;
       const Z = 2;
   }
   
   class xx extends x {
       // Z is inherited, and its value is 2    
       // Y used to be 1, it is now 31
       const Y = 31;
       const A = 3;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Private Visibility <private>`, :ref:`Inheritance <inheritance>`
