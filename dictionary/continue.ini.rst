.. _continue:

Continue
--------

continue is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration.

continue is not possible inside a switch structure. 


.. code-block:: php
   
   <?php
   
   foreach ($arr as $key => $value) {
       if (!($key % 2)) { // skip even members
           continue;
       }
       do_something_odd($value);
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.continue.php>`__

Related : :ref:`Break <break>`
