.. _traversable:

Traversable
-----------

Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface : it cannot be implemented directly, and instead, it must be implemented by either IteratorAggregate or Iterator. 

The traversable interface is used for typing purposes. 


.. code-block:: php
   
   <?php
   
   try {
       doSomething();
   } catch (\Traversable $e) {
       print "Some error was raised during processing : ". $e::class;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.traversable.php>`__

See also `Traversable interface in PHP <https://blog.eduonix.com/web-programming-tutorials/traversable-interface-in-php/>`_

Related : :ref:`Exception <exception>`, :ref:`Error <error>`
