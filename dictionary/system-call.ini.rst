.. _system-call:

System Call
-----------

A system call is a call to an operating system function. In PHP, those are done with the shell_exec(), system() and exec() functions; and the `` (back tick) operators.


.. code-block:: php
   
   <?php
   
   // list files
   $list = shell_exec('ls -1');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/System_call>`__
