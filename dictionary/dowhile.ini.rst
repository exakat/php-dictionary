.. _dowhile:

Do...while
----------

Do...while is a loop structure. It runs the block once, then it runs it until the condition is not met anymore. 

The loop may be terminated by using the ``continue`` keyword.

.. code-block:: php
   
   <?php
   
   /*
   do {
   	// the block
   } while(condition);
   */
   
   $i = 0;
   do {
   	print "$i\n";
   } while($i < 10);
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.do.while.php>`__

Related : :ref:`While <while>`, :ref:`Continue <continue>`
