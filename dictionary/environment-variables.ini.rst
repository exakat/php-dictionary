.. _environment-variable:
.. meta::
	:description:
		Environment Variables: Environment variables are a way to store and access configuration information or settings related to the runtime environment in which a PHP script is executed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Environment Variables
	:twitter:description: Environment Variables: Environment variables are a way to store and access configuration information or settings related to the runtime environment in which a PHP script is executed
	:twitter:creator: @exakat
	:og:title: Environment Variables
	:og:type: article
	:og:description: Environment variables are a way to store and access configuration information or settings related to the runtime environment in which a PHP script is executed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/environment-variable.ini.html
	:og:locale: en


Environment Variables
---------------------

Environment variables are a way to store and access configuration information or settings related to the runtime environment in which a PHP script is executed. These variables are part of the operating system's environment and can be used to retrieve information about the server, the operating system, or custom configuration parameters that are set for a particular application. PHP provides a way to access these variables through the ``$_ENV`` superglobal array.

The environment variables are set in the operating system before the execution of the script, using commands such as ``export``, ``setenv``, or else (depending on the OS). They may also be provided at the start of containerized images. 


.. code-block:: php
   
   <?php
   
   // print all available environment variables at the start of the script
   // it may be empty
   print_r($_ENV);
   
   // retrieve an environment variable 
   var_dump(getenv('MY_VARIABLE'));
   
   // sets an environment variable 
   var_dump(setenv('MY_VARIABLE', 2));
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Environment_variable>`__

See also `Working with Environment Variables in PHP <https://www.twilio.com/blog/working-with-environment-variables-in-php>`_
