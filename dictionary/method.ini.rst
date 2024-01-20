.. _method:

Method
------

Methods are function dedicated to a class. They are defined inside the body of a class, and may only be access in relation to that class : via an object, the class name or another method. 



.. code-block:: php
   
   <?php
   
   class x {
       public function foo() {
           echo "I am foo!\n";
       }
   }
   
   $x = new Y();
   $y->foo(); // calling the foo method, defined in x,
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods>`__

Related : :ref:`Classes <class>`
