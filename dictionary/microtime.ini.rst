.. _microtime:
.. meta::
	:description:
		Microtime(): microtime() is a native PHP function, which returns the current timestamp, with the microseconds.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Microtime()
	:twitter:description: Microtime(): microtime() is a native PHP function, which returns the current timestamp, with the microseconds
	:twitter:creator: @exakat
	:og:title: Microtime()
	:og:type: article
	:og:description: microtime() is a native PHP function, which returns the current timestamp, with the microseconds
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/microtime.ini.html
	:og:locale: en


Microtime()
-----------

microtime() is a native PHP function, which returns the current timestamp, with the microseconds. This is a very precise measure of time. 

microtime() is often used for speed measures, and it may be easily replaced by hrtime() for such purpose, since PHP 7.3.

.. code-block:: php
   
   <?php
   $time_start = microtime(true);
   
   // Sleep some time
   usleep(100);
   
   $time_end = microtime(true);
   $time = $time_end - $time_start;
   
   echo Slept for $time seconds\n;
   ?>
   


`Documentation <https://www.php.net/manual/fr/function.microtime.php>`__

See also `hrtime <https://www.php.net/manual/fr/function.hrtime.php>`_
