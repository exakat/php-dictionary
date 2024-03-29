.. _preprocess:
.. _preprocessing:

Preprocessing
-------------

Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script. This is only possible with constants values, which are known before execution.

Preprocessing may save execution time, and memory. 

In terms of maintenance, it hides some implementation details in the result : one has to guess where this value is coming from.


.. code-block:: php
   
   <?php
   
   $seconds = 60;
   $minutes = 60;
   
   $hours = $seconds * $minutes;
   
   // this variable may be preprocessed, saving the calculation at execution time.
   $hours = 3600;
   
   ?>
   


`Documentation <https://www.php.net/manual/en/class.locale.php>`__
