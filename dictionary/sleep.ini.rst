.. _sleep:

sleep
-----

sleep() is a PHP function which stops the execution for a given number of seconds. In web security, stopping a process makes it vulnerable to DOS attack : the process will wait, doing nothing yet using resources, allowing an attacker to saturate the server.

.. code-block:: php
   
   <?php
   
   // sleeps for 3 seconds
   sleep(3);
   
   // sleeps for 2 seconds
   usleep(2000000);
   
   ?>
   


`Documentation <https://www.php.net/manual/en/features.commandline.php>`__
