.. _generator:

Generator
---------

Generators provide an easy way to implement simple iterators without the overhead or complexity of implementing a class that implements the Iterator interface.

Generator must have no return type, or use the \Generator type.


.. code-block:: php
   
   <?php
   
   function evenIntegers() {
       for ($i = 0; $i < 10; ++$i) {
           yield 2 * $i;
       }
   }
   
   foreach (evenInteger() as $number) {
       echo "$number ";
   }
   echo "\n";
   ?>


`Documentation <https://www.php.net/manual/en/language.generators.overview.php>`__

See also `Do generators really reduce the memory usage? <https://phpdelusions.net/articles/generators>`_, `PHP Generators From Scratch <https://alanstorm.com/php-generators-from-scratch/>`_

Related : :ref:`Yield <yield>`, :ref:`yield from Keyword <yield-from>`, :ref:`Return Typehint <return-type>`
