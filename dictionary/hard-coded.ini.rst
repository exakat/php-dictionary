.. _hard-coded:
.. _hardcoded:

Hard Coded
----------

Hard coded data in code happens when a value is set as a literal in the code, and can't be change through any directives or parameters.

Hard-code becomes a security problem, when the hard-coded value is a password or a hash of it. This secret is now readable in the code.


.. code-block:: php
   
   <?php 
   
   // This is hard-coded
   $a = 1;
   
   // $b has a default value, but may also be changed at execution time
   function foo($b = 2) {
       echo $b;
   }
   
    ?>
   


`Documentation <https://en.wikipedia.org/wiki/Hard_coding>`__
