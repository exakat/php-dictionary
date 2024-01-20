.. _do-while:

Do While
--------

Do While is a loop structure. It runs the block of code until the condition is not met anymore. The block is run once before the condition is checked, so it is always run at least once.

Part of the block execution may be skipped by using the `continue` keyword. 

 

.. code-block:: php
   
   <?php
   
   /*
   do {
   	// the block
   } while(condition);
   */
   
   $i = 1;
   do {
   	print "$i\n";
   } while($i < 10);
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.do.while.php>`__

Related : :ref:`Continue <continue>`, :ref:`Foreach <foreach>`, :ref:`Loops <loop>`, :ref:`For <for>`, :ref:`While <while>`
