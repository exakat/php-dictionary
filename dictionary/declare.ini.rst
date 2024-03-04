.. _declare:

declare()
---------

declare() is a language construct. It is used to set execution directives for a block of code. 

declare() may set the following values : 

+ ``strict_types`` : strict typing in the block
+ ``ticks`` : generate a tick event 
+ ``encoding`` : per-file encoding directive

declare() affects some configuration for the next block of code. 


.. code-block:: php
   
   <?php
       declare(strict_types=1, encoding='UTF-8');
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.declare.php>`__

Related : :ref:`strict_types <strict_types>`, :ref:`Tick <tick>`, :ref:`declare Encoding <declare-encoding>`
