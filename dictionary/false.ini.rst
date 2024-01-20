.. _false:

False
-----

false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true. 

.. code-block:: php
   
   <?php
   
   function foo($a) : false|A {
       if ($a == 1) {
           return false;
       } else {
           return new A();
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

Related : :ref:`Boolean <boolean>`, :ref:`Type system <type>`
