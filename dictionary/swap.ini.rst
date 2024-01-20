.. _swap:

SWAP
----

Swap may be two things : 

+ Memory, stored on the disk. 
+ The operation to exchange 2 things, one for another. For example, variable swap, which exchange their value.



.. code-block:: php
   
   <?php
   
   // simple swap technic : 
   list($a, $b) = array($a, $b);
   
   [$a, $b] = [$a, $b];
   
   ?>

