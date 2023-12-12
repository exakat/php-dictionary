.. _array:

Array
-----

array is the array structure in PHP. 

It may be written as array() or with square brackets `[]`.

An array assigns automatically an integer index to the values appended to it. An arbitrary index may be assigned with the => syntax, or when accessing an element in the array. 


.. code-block:: php
   
   <?php
   
   $array = array(1, 2, 3); 
   
   $anotherArray = ['a' => 2, 'b' => 33];
   
   echo $anotherArray['b']; // 33
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__
