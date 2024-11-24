.. _true:

True
----

true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false. 

``true`` as a type was introduced in PHP 8.2.



.. code-block:: php
   
   <?php
   
   function foo($a) : true|A {
       if ($a == 1) {
           return true;
       } else {
           return new A();
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

Related : :ref:`Boolean <boolean>`, :ref:`Type System <type>`, :ref:`False <false>`
