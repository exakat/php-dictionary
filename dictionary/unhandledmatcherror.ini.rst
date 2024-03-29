.. _unhandledmatcherror:

UnhandledMatchError
-------------------

An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression. This means that all the cases have been exhausted, and then, the ``default`` case is missing. 

Instead of finishing the ``match`` expression without any returned value, it throws an exception and stops the execution. This is a different behavior than ``switch``, which will continue the processing, even if nothing was found, potentially leading to unexpected situations.

.. code-block:: php
   
   <?php
   
   $b = match(3) {
       1 => "A",
       2 => "b";
   };
   
   
   ?>


`Documentation <https://www.php.net/manual/en/class.unhandledmatcherror.php>`__

Related : :ref:`Exception <exception>`, :ref:`Error <error>`, :ref:`Match <match>`
