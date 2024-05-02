.. _iterable:

Iterable
--------

Iterable is a pseudo-type, which accepts any array or object implementing the Traversable interface.

.. code-block:: php
   
   <?php
   
   function foo(iterable $iterable) {
       foreach ($iterable as $value) {
           // ...
       } 
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.iterable.php>`__

Related : :ref:`Traversable <traversable>`, :ref:`Array <array>`

Added in PHP 7.1
