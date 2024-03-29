.. _compact-array:

Compact Array
-------------

An array is compact if it only uses automated indices, starting with 0. This doesn't really show in PHP code, though performances are better for some operations.

Such array's status may be reached by using array_values() or array_keys() on the array. 

This notion is not related to the compact() function.


.. code-block:: php
   
   <?php
   
   $array = [1,2,3];
   
   $notCompact = [1,2,3, 4=>4];
   
   $compactAgain = array_values($notCompact);
   
   ?>


`Documentation <https://www.npopov.com/2012/03/28/Understanding-PHPs-internal-array-implementation.html>`__

Related : :ref:`compact() <compact>`, :ref:`Simple Switch <simple-switch>`
