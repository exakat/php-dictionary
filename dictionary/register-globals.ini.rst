.. _register-globals:

Register Globals
----------------

Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES. 

This meant that the initial set of variables in an application was not known, as they would depend on the incoming data. 

Register-globals has been removed in PHP 5.4. 


.. code-block:: php
   
   <?php
   	// $_GET['foo'] = 'bar';
   	
   	echo $foo;
   	
   	// $_GET['_SESSION']['logged'] = '1';
   	
   ?>


`Documentation <https://www.mediawiki.org/wiki/Register_globals>`__
