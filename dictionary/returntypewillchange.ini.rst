.. _returntypewillchange:

Return Type Will Change
-----------------------

This is a native PHP attribute. It tells the engine that method overwriting or implementing a native method will use a different return type.

PHP checks the compatibility of implementing methods versus a custom interface. Until PHP 8.1, it did not report such violation when the interface is a PHP native one: this was for backward compatibility.

To avoid using that attribute, one must made the return type compatible with PHP signatures.

This attributes only works with PHP native methods: it is ignored when used with other methods.


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
