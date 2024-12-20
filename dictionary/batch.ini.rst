.. _batch:

Batch
-----

Batch processing refers to the treatment of several items at the same time, instead of one at a time.

Batch may mean all at the same time, or it may refers to processing the elements in several small groups. 

Processing in batch is efficient when the overhead of an operation is high per unit (like storing one row at a time in a database), or when processing everything at once requires too much resources.

.. code-block:: php
   
   <?php
   
   // Processing the array one by one
   foreach($array as $a) {
       $database->store($a);
   }
   
   // Processing the array in one time
   $database->store($array);
   
   // Processing the array by batch of 10
   $chunks = array_chunk($array, 10);
   foreach($chunks as $chunk) {
       $database->store($chunk);
   }
   
   ?>

