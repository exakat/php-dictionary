.. _yoda:
.. _yoda-condition:

Yoda Condition
--------------

Yoda condition is a way to write condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.

.. code-block:: php
   
   <?php
   
   // Yoda condition
   if (0 == $a) {}
   
   // Assignation, instead of comparison and bug
   if ($a = 0) {}
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Yoda_conditions>`__

See also `Why using Yoda conditions you should probably not be  <https://dev.to/greg0ire/why-using-yoda-conditions-you-should-probably-not>`_
