.. _new-in-initializer:

New In Initializers
-------------------

It is possible to use a new expression for default values of static variables, arguments and properties.

.. code-block:: php
   
   <?php
   
   function headers($a = new B()) : B {
       return $a;
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/new_in_initializers>`__

Added in PHP 8.1+
