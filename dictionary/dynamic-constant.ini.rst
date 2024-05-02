.. _dynamic-constant:

Dynamic Constant
----------------

A constant is dynamic when its name is a piece of data, and is only access at execution time. 

Calling a constant is done by using the constant() function. 

Sometimes, dynamic constants are also called variable constants. 

.. code-block:: php
   
   <?php
   
   const A = 1;
   
   $a = 'A';
   
   echo constant($a); // displays 1
   
   ?>


`Documentation <https://www.php.net/manual/en/function.constant.php>`__

Related : :ref:`Constants <constant>`
