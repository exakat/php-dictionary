.. _arrow-function:
.. _fn:

Arrow Functions
---------------

Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and uses the local context of definition.

.. code-block:: php
   
   <?php
   
   $b = 10;
   $fn = fn($a) => $a + $b + 2;
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arrow.php>`__

Related : :ref:`static <static>`, :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`First Class Callable <first-class-callable>`

Added in PHP 7.4
