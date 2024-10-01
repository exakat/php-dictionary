.. _unpacking:
.. _unpack:

Unpacking
---------

Unpacking has two meanings : 

+ unpack(), a PHP native function, which extracts data from a binary string. It has the pack() reverse function.
+ unpacking arguments, with the `...` operator : turning an array into a list of arguments at call time. 



.. code-block:: php
   
   <?php
   
   // Unpacking arguments
   function foo($a, $b, $c) {
   	return $a + $b * $c;
   }
   
   $arguments = ['a' => 1, 'b' => 2, 'c' => 3];
   echo foo(...$arguments);
   // display 7
   
   ?>


Related : :ref:`Variadic <variadic>`, :ref:`Variadic <splat>`, :ref:`Variadic <spread>`
