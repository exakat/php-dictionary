.. _toctou:
.. meta::
	:description:
		toctou : Time Of Check To Time Of Use: Toctou is a class of bug where there is a time interval between checking a resource and then using it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: toctou : Time Of Check To Time Of Use
	:twitter:description: toctou : Time Of Check To Time Of Use: Toctou is a class of bug where there is a time interval between checking a resource and then using it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: toctou : Time Of Check To Time Of Use
	:og:type: article
	:og:description: Toctou is a class of bug where there is a time interval between checking a resource and then using it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/toctou.ini.html
	:og:locale: en


toctou : Time Of Check To Time Of Use
-------------------------------------

Toctou is a class of bug where there is a time interval between checking a resource and then using it. This interval may be used by an attacker to replace the checked resource, and fool the code.


.. code-block:: php
   
   <?php
   
   function foo($file) {
   	// Checking is the file exists
   	if (!file_exists($file)) {
   		return false;
   	}
   	
   	$fp = fopen($file, 'r');
   	// $fp should be available, because it was checked just before
   	// The TOCTOU is here
   	$string = fget($fp, 1000);
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Time-of-check_to_time-of-use>`__

See also `Practical Race Condition Vulnerabilities in Web Applications <https://defuse.ca/race-conditions-in-web-applications.htm>`_
