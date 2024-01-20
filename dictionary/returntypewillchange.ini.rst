.. _returntypewillchange:

Return Type Will Change
-----------------------

This is a native PHP attribute, which tells the engine that method overwriting some native methods will change the returntype.

To avoid using that attribute, one must made the return type compatible with PHP signatures.


.. code-block:: php
   
   <?php
   
   class Foo implements ArrayAccess {
       #[\ReturnTypeWillChange]
       public function offsetGet(mixed $offset) {}
       // ...
   }
   
   ?>


`Documentation <https://php.watch/versions/8.1/ReturnTypeWillChange>`__

Added in PHP 8.1+
