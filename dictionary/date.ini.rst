.. _date:
.. _datetime:

Dates
-----

These functions allow you to get the date and time from the server where your PHP scripts are running. You can use these functions to format the date and time in many different ways.

.. code-block:: php
   
   <?php
   $dt = new DateTimeImmutable('2015-11-01 00:00:00', new DateTimeZone('America/New_York'));
   echo 'Start: ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;
   $dt = $dt->add(new DateInterval('PT3H'));
   echo 'End:   ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;
   ?>


`Documentation <https://www.php.net/datetime>`__

See also `PHP Time handling: the ultimate guide (Part 1/3) <https://alexwebdevelop.com/php-time-handling-part-1/>`_, `PHP Time handling: the ultimate guide (Part 2/3) <https://alexwebdevelop.com/php-time-handling-part-2/>`_, `PHP Time handling: the ultimate guide (Part 3/3) <https://alexwebdevelop.com/php-time-handling-part-3/>`_
