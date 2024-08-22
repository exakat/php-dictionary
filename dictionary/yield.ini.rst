.. _yield:

Yield
-----

In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function. 

.. code-block:: php
   
   <?php
   function gen_one_to_three() {
       for ($i = 1; $i <= 3; $i++) {
           // Note that $i is preserved between yields.
           yield $i;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield>`__

See also `Introduction to PHP yield <https://www.educba.com/php-yield/>`_

Related : :ref:`yield from Keyword <yield-from>`, :ref:`Generator <generator>`

Added in PHP 5.5
