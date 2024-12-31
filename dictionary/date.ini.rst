.. _date:
.. _datetime:
.. meta::
	:description:
		Dates: These functions allow you to get the date and time from the server where your PHP scripts are running.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dates
	:twitter:description: Dates: These functions allow you to get the date and time from the server where your PHP scripts are running
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dates
	:og:type: article
	:og:description: These functions allow you to get the date and time from the server where your PHP scripts are running
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/date.ini.html
	:og:locale: en


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
