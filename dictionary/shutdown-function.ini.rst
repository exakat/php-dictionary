.. _shutdown-function:
.. _shutdown-handler:
.. meta::
	:description:
		Shutdown Function: The shutdown function is a PHP custom function which is called when the application is shutting down.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shutdown Function
	:twitter:description: Shutdown Function: The shutdown function is a PHP custom function which is called when the application is shutting down
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shutdown Function
	:og:type: article
	:og:description: The shutdown function is a PHP custom function which is called when the application is shutting down
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shutdown-function.ini.html
	:og:locale: en


Shutdown Function
-----------------

The shutdown function is a PHP custom function which is called when the application is shutting down. This is after a call to exit(), die() or the natural end of life of the script.

Multiple functions may be registered with the register_shutdown_function() function. They will be called in order of registration.

Shutdown function acts as destructors : they should clean up any unfinished jobs, and gracefully free resources, such as closing files with their correct endings, or gracefully closing connections.


.. code-block:: php
   
   <?php
   // extract from the PHP manual
   function shutdown()
   {
       // This is our shutdown function, in 
       // here we can do any last operations
       // before the script is complete.
   
       echo 'Script executed with success', PHP_EOL;
   }
   
   register_shutdown_function('shutdown');
   ?>


`Documentation <https://www.php.net/manual/en/function.register-shutdown-function.php>`__

See also `Register Shutdown Function PHP <https://www.learn-codes.net/php/register-shutdown-function-php/>`_

Related : :ref:`PHP Handlers <handler>`
