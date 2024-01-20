.. _closure:
.. _anonymous-functions:
.. _lambda-functions:

Closure
-------

Closures are anonymous functions : functions without a name. They are also supported by the eponymous `Closure` class in PHP.

They are close to the arrow-functions. 


.. code-block:: php
   
   <?php
   
   $closure = function ($a) use ($b) {
       return $a + $b + 1;
   };
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.anonymous.php>`__

Related : :ref:`static <static>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`Closure <closure>`
