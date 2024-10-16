.. _uopz:

UOPZ
----

The uopz - User Operations for Zend - extension exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.

.. code-block:: php
   
   <?php
   
   // Dynamically adds an interface to a class with UOPZ
   
   interface myInterface {}
   
   class myClass {}
   
   uopz_implement(myClass::class, myInterface::class);
   
   var_dump(class_implements(myClass::class));
   ?>
   


`Documentation <https://www.php.net/manual/en/book.uopz.php>`__

See also `UOPZ <https://github.com/krakjoe/uopz>`_
