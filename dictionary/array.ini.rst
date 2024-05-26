.. _array:
.. _array-short-syntax:

Array
-----

array is the array structure in PHP. 

It may be written as array() or with square brackets `[]`, which is also called the array short syntax.

The keys that serve as index in the array may be string or integers. 

An array assigns automatically an integer index to the values appended to it. An arbitrary index may be assigned with the ``=>`` syntax, or when accessing an element in the array. 

Mixed keys in an array refers to the practice add elements in the array with both the automatic indexing and the arbitrary assignment. 


.. code-block:: php
   
   <?php
   
   $array = array(1, 2, 3); 
   
   $anotherArray = ['a' => 2, 'b' => 33];
   
   echo $anotherArray['b']; // 33
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

Related : :ref:`Index For Arrays <index-array>`, :ref:`Addition <addition>`, :ref:`Comma <comma>`, :ref:`Dereferencing <dereferencing>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Hash <hash>`, :ref:`Hash <hashing>`, :ref:`Iterable <iterable>`, :ref:`List <list>`, :ref:`Map <map>`, :ref:`Sort <sort>`, :ref:`Sort <sorting>`
