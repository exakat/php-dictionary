.. _class-constant-visibility:

Class Constants Visibility
--------------------------

Class constant may have a visibility option. This limits their accessibility to the current class, its class hierarchy or any other class. Visibilities for class constants are : private, protected and public. 

.. code-block:: php
   
   <?php
   
   class x {
   	// This class can only be used in x
       private const C1 = 1;
   
   	// This class can only be used in x and y
       protected const C2 = 1;
   
   	// This class can be used in x, y and z
       private const C3 = 1;
   }
   
   class y extends x {
   	// doSomething()
   }
   
   class z {
   	// doSomething()
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visiblity-constants>`__

Related : :ref:`Visibility <visibility>`

Added in PHP 7.1
