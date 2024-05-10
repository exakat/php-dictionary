.. _compact:

compact()
---------

compact() is a native PHP function, which creates an array containing variables and their values.

It is the opposite of extract().


.. code-block:: php
   
   <?php
   
   $a = '1';
   $b = '2';
   
   $array = compact('a', 'b');
   // ['a' => 1, 'b' => 2];
   ?>
   


`Documentation <https://www.php.net/manual/en/function.compact.php>`__

Related : :ref:`extract() <extract>`, :ref:`Variable Variables <variable-variable>`
