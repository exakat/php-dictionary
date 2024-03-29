.. _closedgeneratorexception:

ClosedGeneratorException
------------------------

A ``ClosedGeneratorException`` is an exception that occurs when the code tries to perform an operation on a generator that has already been closed. Generators iterates over a set of values without needing to create an array to hold all the values in memory at once.

Once a generator is closed, it cannot be used for further iteration. Any attempt to use methods like next(), send(), or throw() on a closed generator throws a ``ClosedGeneratorException``, to indicate that the generator is no longer available for iteration.

.. code-block:: php
   
   <?php
   
   // Code example from Ben Peachey (see external links)
   // Adapted for presentation purposes
   
   class CustomException extends Exception {}
   
   function from() {
       yield 1;
       throw new CustomException();
   }
   
   function gen($gen) {
       yield from $gen;
   }
   
   $gen = from();
   $gens[] = gen($gen);
   $gens[] = gen($gen);
   
   foreach ($gens as $g) {
       $g->current(); // init.
   }
   
   foreach ($gens as $i => $g) {
       try {
           $g->current();
           $g->next();
       } catch (\ClosedGeneratorException $e) {
           print 'Caught ClosedGeneratorException'.PHP_EOL;
       } catch (\Exception $e) {
           print 'Caught Generic Exception'.PHP_EOL;
       }
   }
   
   ?>


See also `Explaining the ClosedGeneratorException in PHP <https://gist.github.com/Potherca/a74a14e698158d927f9d32c4b5f4e303>`_, `PHP Exception Handling - ClosedGeneratorException <https://blog.airbrake.io/blog/php-exception-handling/closedgeneratorexception>`_
