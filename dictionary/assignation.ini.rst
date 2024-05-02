.. _assignation:
.. _assignement:

Assignations
------------

Assignation refers to the process of assigning a value to a variable. It is a fundamental concept in programming that allows to store and manipulate data.

The main operator of assignation is `=`. There are secondary operators, such as `+=`, `*=`, ``??=``, ... which are called short assignation : they apply a specific operation while assigning.

Finally, there are some inherent assignations: foreach() loops, method calls and list() operator performs assignations without an explicit operator.

.. code-block:: php
   
   <?php
   
   $a = 'b';
   
   // $c is assigned by 
   foreach([1, 2, 3] as $c) {}
   echo $c; // $c is 3
   
   // list call that assigns values
   [$a, $b, $c] = ['a', 'b', 'C'];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

Related : :ref:`Short Assignations <short-assignation>`
