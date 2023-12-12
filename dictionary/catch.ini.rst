.. _catch:

Catch
-----

Catch is the complement clause of try : it defines which exception is caught. Optionally, it defines which variable holds the exception when it happens (since PHP 8.0).

Multiple catches may be used. They are applied in the order of coding, and the first clause which succeed is the last.


.. code-block:: php
   
   <?php
   
   try {
       callSomeMethod();
   } catch (\SomeException $e) {
       display("Warning");
   } catch (\SomeSeriousException $e) {
       display("Alert");
   } catch (\Exception) {
       // process the error here
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also `Non-capturing exception catches in PHP 8 <https://www.amitmerchant.com/non-capturing-exception-catches-php8/>`_

Related : :ref:`Try-catch <try-catch>`, :ref:`Finally <finally>`, :ref:`Throwable <throwable>`
