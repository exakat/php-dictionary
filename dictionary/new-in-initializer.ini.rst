.. _new-in-initializer:
.. _new-initializer:

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

See also `PHP RFC: New in initializers <https://wiki.php.net/rfc/new_in_initializers>`_

Added in PHP 8.1+
