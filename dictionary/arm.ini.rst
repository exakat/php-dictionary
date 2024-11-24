.. _arm:

Arm
---

An arm is a branch in a match() expression. There is the ``default`` arm, and the other ``arm``. The arm includes the case (left) and the payload (right).

.. code-block:: php
   
   <?php
   
   // a match with 2 arm, including the default
   $a = match($b) {
   	1 => 2,
   	default => 3,
   };
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.match.php>`__

Related : :ref:`If Then Else <if-then>`, :ref:`Branch <branch>`, :ref:`Match <match>`
