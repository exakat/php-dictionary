.. _reference:

References
----------

References references allow to create multiple variables that refer to the same underlying value in memory. When using references, any changes made to one variable affect the others that reference the same value. This can be useful in certain situations, such as when you want to avoid copying large amounts of data or when you need to modify the original value through multiple variables.

.. code-block:: php
   
   <?php
   
   $a = 1;
   
   $b = &$a; 
   $b = 2;
   
   echo $a;
   // displays 2
   ?>


`Documentation <https://www.php.net/manual/en/language.references.php>`__

See also `PHP References: How They Work, and When to Use Them <https://www.elated.com/php-references/>`_, `PHP Spotting References <https://www.tutorialspoint.com/php-spotting-references>`_, `References in PHP <https://erikpoehler.com/2023/01/15/references-in-php/>`_

Related : :ref:`Variables <variable>`, :ref:`Weak References <weak-reference>`
