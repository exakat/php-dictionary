.. _while:

While
-----

While is a loop structure. It runs the block of code until the condition is not met anymore. 

The initialization, termination and increment expression may all host several instructions : they have to be separated by comma, rather than semi colons.

Part of the block execution may be skipped by using the `continue` keyword. 

 

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

Related : :ref:`Continue <continue>`, :ref:`Foreach <foreach>`, :ref:`Loops <loop>`, :ref:`For <for>`, :ref:`While <while>`
