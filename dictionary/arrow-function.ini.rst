.. _arrow-function:
.. _fn:

Arrow Functions
---------------

Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and uses all the variables from the local context of definition. They may also be marked as ``static``, to prevent this last feature.

.. code-block:: php
   
   <?php
   
   $b = 10;
   $fn = fn($a) => $a + $b + 2;
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arrow.php>`__

Related : :ref:`static <static>`, :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`First Class Callable <first-class-callable>`, , :ref:`Callables <callable>`, :ref:`Callbacks <callback>`, :ref:`Closure <lambda-functions>`

Added in PHP 7.4
