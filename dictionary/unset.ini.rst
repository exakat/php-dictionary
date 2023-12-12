.. _unset:

unset()
-------

unset() removes a variable. This feature used to be available as a function call `unset()` or as a type cast `(unset)`. The type-cast was removed in PHP 7.2. 

.. code-block:: php
   
   <?php
   
   $a = 1;
   unset($a);
   var_dump(isset($a)); // false
   
   ?>


`Documentation <https://www.php.net/manual/en/function.unset.php>`__

Related : :ref:`Variables <variable>`
