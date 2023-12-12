.. _try-catch:

Try-catch
---------

Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw. It may be completed with a finally block.

The catch clause may be anonymous, when it only specify the type of caught exception, without providing a variable name.


.. code-block:: php
   
   <?php
   
   try {
       callSomeMethod();
   } catch (\Exception $e) {
       // process the error here
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also `PHP: Try and Catch me if you can! <https://medium.com/@erlandmuchasaj/php-try-and-catch-me-if-you-can-824bc6bb6698>`_

Related : :ref:`Finally <finally>`
