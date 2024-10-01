.. _arrow-function:
.. _fn:

Arrow Functions
---------------

Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and automatically imports all the variables from the local context of definition. 

Arrow functions may also be marked as ``static``, to prevent this import.

.. code-block:: php
   
   <?php
   
   $b = 10;
   $fn = fn($a) => $a + $b + 2;
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arrow.php>`__

See also `Arrow functions in PHP <https://drops-of-php.hi-folks.dev/04-functions/02-fns-arrowfunction/>`_

Related : :ref:`static <static>`, :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`First Class Callable <first-class-callable>`, , :ref:`Callables <callable>`, :ref:`Callbacks <callback>`, :ref:`Closure <lambda-functions>`

Added in PHP 7.4
