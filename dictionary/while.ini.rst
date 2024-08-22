.. _while:

While
-----

While is a loop structure. It runs the block of code until the condition is not met anymore. 

Part of the loop execution may be skipped by using the ``continue`` keyword.

.. code-block:: php
   
   <?php
   
   /*
   while(condition) {
   	// the block
   }
   */
   
   $i = 0;
   while($i < 10) {
   	print "$i\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.while.php>`__

Related : :ref:`Continue <continue>`, :ref:`Do...while <dowhile>`, :ref:`Foreach <foreach>`, :ref:`Loops <loop>`, :ref:`For <for>`
