.. _finally:

Finally
-------

Finally is the default clause of a try-catch expression. It is run after all the catch clauses have been called.

Finally is run every time after a try, with or without any catch clause. It is also run before the return expression, if any. 



.. code-block:: php
   
   <?php
   
   try{
       doSomething();
   } catch (\Exception $e) {
       print "An exception was raised and caught";
   } finally {
       print "Finally\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally>`__

See also `How to use Try - Catch - Finally in PHP  <https://thecodeprogram.com/how-to-use-try---catch---finally-in-php>`_

Related : :ref:`Try-catch <try-catch>`, :ref:`Catch <catch>`

Added in PHP 7.0
