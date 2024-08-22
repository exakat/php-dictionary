.. _indexed-array:

Indexed Array
-------------

An indexed array is an array whose keys are only integers. The keys may be explicit or implicit.

An array with string index is an associative array.

.. code-block:: php
   
   
   <?php
   
   $associative = [10 => 'a', 'b'];
   
   echo $associative[10]; // a
   echo $associative[0]; // b
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

Related : :ref:`Associative Array <associative-array>`, :ref:`Array <array>`, :ref:`Collection <collection>`

Related packages : `sebastian/object-enumerator <https://packagist.org/packages/sebastian/object-enumerator>`_, `ramsey/collection <https://packagist.org/packages/ramsey/collection>`_
