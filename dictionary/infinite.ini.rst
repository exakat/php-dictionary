.. _infinite:

Infinite
--------

Infinite is a PHP constant, called ``INF``. It is also possible to generate such a value, with calls to math functions such as ``log(0)`` or ``1e308 * 2``.

While the infinite is a float, it is possible to test a number with ``is_infinite()``.

.. code-block:: php
   
   <?php
   
   $infinite = 1e308 * 2;
   
   var_dump(is_infinite($infinite)); // true 
   
   var_dump(INF === $infinite);      // true 
   
   ?>


`Documentation <https://www.php.net/manual/en/math.constants.php>`__

See also `is_infinite() <https://www.php.net/manual/en/function.is-infinite.php>`_
