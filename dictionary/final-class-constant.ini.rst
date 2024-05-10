.. _final-class-constant:

Final Class Constants
---------------------

Using the final option with class constants, the constant cannot be redefined by a child class. It is not possible to give it a new value or visibility. 

It yields a Fatal error : 'y::x cannot override final constant'. 


.. code-block:: php
   
   <?php
   
   class x {
       final public const F = 1;
       public const C = 2;
   }
   
   class y extends x {
   	// 
       public const C = 3;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

Related : :ref:`Final Keyword <final>`

Added in PHP 8.1
