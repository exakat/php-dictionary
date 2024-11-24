.. _sleep:
.. _usleep:

sleep
-----

sleep() is a PHP function which stops the execution for a given number of seconds. 

In web security, stopping a process makes it vulnerable to DOS attack : the process waits, doing nothing yet using resources, allowing an attacker to saturate the server.

On the other hand, slowing down a process reduces the efficiency of a brute force attack. A milli second of sleep may not be significant for a legit user, but it may slow down dramatically any brute force attack, that requires millions of tests.

This also covers ``usleep``, which stops the execution of PHP for a given number of milliseconds; time_sleep_until(), which sleeps until a specified date; time_nanosleep(), which stops the execution of PHP for a given number of nanoseconds.

.. code-block:: php
   
   <?php
   
   // sleeps for 3 seconds
   sleep(3);
   
   // sleeps for 2 seconds
   usleep(2000000);
   
   ?>
   


`Documentation <https://www.php.net/manual/en/features.commandline.php>`__

See also `Mastering PHP's sleep() and usleep() Functions for Time Delays <https://reintech.io/blog/mastering-php-sleep-usleep-functions-time-delays>`_
