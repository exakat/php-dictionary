.. _array-syntax:

Array syntax
------------

The array syntax is the usage of square brackets after a data container (variables, properties...) or a literal, to access an element. It is generally known to be used with array structures, though it may also be used with strings and objects.

.. code-block:: php
   
   <?php
   
   $array = ['a', 'b', 'c'];
   echo $array[1]; // b
   
   $string = 'ABC';
   echo $string[2]; // C
   
   $object = new ArrayObject(['x', 'y', 'z']);
   print $object[0]; // x
   
   ?>


Related : :ref:`Object Syntax <object-syntax>`, :ref:`resource <resource>`
