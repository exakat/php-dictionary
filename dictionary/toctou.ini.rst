.. _toctou:

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
