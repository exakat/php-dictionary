.. _anonymous-function:

Anonymous Function
------------------

A function may be instantiated, without defining a function name. Such functions are called anonymous. 

In PHP, they are defined as closures or arrow functions. They may also be created based on existing methods and functions, with the `...` operator.

Even without names, they are usable just like functions, or as callable. 



.. code-block:: php
   
   <?php
   	$closure = function () {} ; 
   
   	$arrowFunction = fn() => 1;
   	
   	$fcs = strlen(...);
   ?>


`Documentation <https://www.php.net/manual/en/functions.anonymous.php>`__

See also `Anonymous functions in PHP <https://drops-of-php.hi-folks.dev/04-functions/01-fns-anonymous/>`_

Related : :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`, :ref:`First Class Callable <first-class-callable>`, :ref:`Closure <lambda-functions>`, :ref:`Anonymous <anonymous>`, :ref:`Arrow Functions <fn>`
