.. _stubs:

Stubs Files
-----------

Stubs files are PHP code, that contains only the definitions of classic PHP structures (functions, constants, classes, interfaces), without any actual code. They only provide the definitions.

Stubs files are also used for PHP code templates : they are mostly made of PHP code, with placeholders, for later generations. 


.. code-block:: php
   
   <?php
   
   $a = 0; // $a is getting overwritten
   $array = extract(['a' => 1, 'b' => 2]);
   
   echo $a + $b; // 2
   ?>
   


`Documentation <https://www.php.net/manual/en/function.extract.php>`__

Related : :ref:`compact() <compact>`
