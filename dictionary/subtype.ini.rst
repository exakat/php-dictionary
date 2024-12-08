.. _subtype:

subtype
-------

A subtype is any of the child types. It is the classes that extend the target class, with the ``extends`` keyword; it also covers all the classes that are a subtypes of that child class. 

The opposite is supertype.


.. code-block:: php
   
   <?php
   
   // Aparent is a supertype of AChild
   class Aparent extends Agrandparent {}
   
   class Achild extends Aparent{}
   
   // Agrandchild is a subtype of AChild
   class Agrandchild extends Achild {}
   
   // These are not subtype of AChild
   class ABrother extends Aparent{}
   
   class ASister extends Aparent{}
   
   ?>


Related : :ref:`supertype <supertype>`
