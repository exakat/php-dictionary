.. _for:

For
---

For is a loop structure. It is configured with an initialization expression, an ending expression and an increment expression. 

The for() loop executes the init expression first, and only once. Then it executes the block, the increment and the ending. When the ending is false, it exits the loop.

The initialization, ending and increment expression may all host several instructions : they have to be separated by comma, rather than semi colons.

Part of the block execution may be skipped by using the `continue` keyword. 

 

.. code-block:: php
   
   <?php
   
   /*
   for(initialization; ending; increment) {
   	block
   }
   */
   
   for($i = 0; $i < 10; ++$i) {
   	print "$i\n";
   }
   
   for($i = 0, $j = 0; $i < 10; ++$i, $j += 2) {
   	print "$i $j\n";  // 1 2, 2 4, 3 6....
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.for.php>`__

See also `Stop using for loops and start showing intent <https://dev.to/rocksheep/stop-using-for-loops-and-start-showing-intent-3am0>`_, `PHP Loop: For, ForEach, While, Do While <https://www.guru99.com/php-loop.html>`_

Related : :ref:`Continue <continue>`, :ref:`Foreach <foreach>`, :ref:`Loops <loop>`, :ref:`While <while>`, :ref:`Do While <do-while>`, :ref:`Control Flow <control-flow>`
