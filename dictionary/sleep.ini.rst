.. _sleep:
.. _usleep:
.. meta::
	:description:
		sleep: sleep() is a PHP function which stops the execution for a given number of seconds.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: sleep
	:twitter:description: sleep: sleep() is a PHP function which stops the execution for a given number of seconds
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: sleep
	:og:type: article
	:og:description: sleep() is a PHP function which stops the execution for a given number of seconds
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sleep.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"sleep","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"sleep() is a PHP function which stops the execution for a given number of seconds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sleep.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
