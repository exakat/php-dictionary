.. _tick:

Tick
----

Ticks are events that occur for a group of N statements, executed by PHP. 

Ticks are started within the declare block. 

Ticks are deprecated since PHP 5.3. They might entirely disappear in PHP 9.0.



.. code-block:: php
   
   <?php
   
   declare(ticks=1);
   
   // A function called on each tick event
   function tick_handler()
   {
       echo 'tick_handler() called'.PHP_EOL;
   }
   
   register_tick_function('tick_handler'); // causes a tick event
   
   $a = 1; // causes a tick event
   
   if ($a > 0) {
       $a += 2; // causes a tick event
       print($a); // causes a tick event
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.declare.php#control-structures.declare.ticks>`__

See also `The declare() function and ticks <http://www.hackingwithphp.com/4/21/0/the-declare-function-and-ticks>`_, `PHP RFC: Deprecate ticks <https://wiki.php.net/rfc/deprecate_ticks>`_

Related : :ref:`declare() <declare>`
