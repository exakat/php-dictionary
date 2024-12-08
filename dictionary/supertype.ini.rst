.. _supertype:

supertype
---------

A supertype is any of the parent types. It is the class that is extended, in a class definition, with the ``extends`` keyword; it also covers all the classes that are a supertype of that parent class. 

The opposite is subtype.


.. code-block:: php
   
   <?php
   
   // Agrandparent is a supertype of AChild
   class Agrandparent {}
   
   // Aparent is a supertype of AChild
   class Aparent extends Agrandparent {}
   
   class Achild extends Aparent{}
   
   // These are not supertype of AChild
   class ABrother extends Aparent{}
   
   class ASister extends Aparent{}
   
   ?>


Related : :ref:`subtype <subtype>`
