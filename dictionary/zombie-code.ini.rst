.. _zombie-code:

Zombie Code
-----------

Zombie code refers to sections of code that are still executed, but whose results are discarded. It is essentially dead or unused code that serves no purpose and can negatively impact the codebase.

Zombie code slows down the application, yet are logged as being used. They are a various of dead code. 



.. code-block:: php
   
   <?php
   
   // $capitalized is calculated from $name
   $capitalized = ucfirst(strtolower($name));
   
   // $capitalized is not used later in the code. 
   echo "Hello $name\n";
   
   ?>


`Documentation <https://www.calculquebec.ca/en/communiques/zombie-code/>`__

See also `Zombie Code <https://www.calculquebec.ca/en/communiques/zombie-code/>`_

Related : :ref:`Dead code <dead-code>`
