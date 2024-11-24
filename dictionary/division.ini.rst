.. _division:

Division
--------

Division is the mathematical division. It applies to numbers: integers and float. 

It also works with booleans and null, which are converted to integers. Other types are not allowed for division and yield a fatal error. 

Division may be resulting in an integer or a float, whatever the type of the initial operands. PHP produces integers whenever possible.

Division by zero, or by any value that is cast to 0, leads to a ``DivisionByZeroError``.

There is a function for the integer division : ``intdiv()``; and ``%`` for the modulo operator, aka the remaining.


.. code-block:: php
   
   <?php
   
   $a = 10 * 2.5; // 23.0
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

See also `Array operators <https://www.php.net/manual/en/language.operators.array.php>`_, `Combining arrays using + versus array_merge in PHP <https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php>`_

Related : :ref:`Addition <addition>`, :ref:`Exponent <exponent>`, :ref:`Multiplication <multiplication>`, :ref:`Modulo <modulo>`
