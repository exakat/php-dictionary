.. _nested-attributes:

Nested Attributes
-----------------

Arguments of attributes may be literals and also objects. The objects must be created with a new expression, in their respective argument position or name. The created object is not necesserily an attribute itself.

.. code-block:: php
   
   <?php
   
   #[
       MyAttribute(
           new OptionA(),
           new OptionB()
       )
   ]
   function headers() : never {
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/new_in_initializers>`__

Added in PHP 8.1+
