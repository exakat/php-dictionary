.. _validation:
.. _filter:

Validation
----------

Validation is the process to check that a data conform to a specific pattern or set of constraints. The data is not modified by a validation process. There are native and extension functions in PHP to perform validation, and components. 

Validation is also called filtering. 

.. code-block:: php
   
   <?php
   
   if (intval($string) > 0) {
       print "The string is an integer";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/filter.examples.validation.php>`__

Related : :ref:`Sanitation <sanitation>`
