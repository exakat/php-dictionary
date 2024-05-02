.. _ellipsis:

Ellipsis
--------

Ellipsis operator is the `...` operator. It also bears the name of three dots, and even dot dot dot. 

It is used to implements the array spread feature, and the variadic arguments. The actual feature depends on the context. 

Ellipsis is the classic punctuation description of the operator, and will apply to both features.


.. code-block:: php
   
   <?php
   
   $array = [1, 2, 3];
   $more = [...$array, 4, 5];
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Ellipsis>`__

Related : :ref:`Array Spread <array-spread>`, :ref:`Variadic <variadic>`

Added in PHP 5.6
