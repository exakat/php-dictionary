.. _implements:

implements
----------

Implements is a keyword, dedicated to classes. It specify which interfaces a class implements.

Implemented interfaces may be tested with types, instanceof, and is_a().

The list of implemented interfaces is accessible with the class_implements() function.


.. code-block:: php
   
   <?php
   
   interface i {
       function fooi() ;
   }
   
   // empty interface 
   interface j { }
   
   class x implements i, j {
       private $property;
       
       public function fooi() {
           return 1;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.interfaces.php#language.oop5.interfaces.implements>`__

Related : :ref:`Classes <class>`, :ref:`Class Getter Method <getter>`, :ref:`extends <extends>`

Added in PHP 5.0+
