.. _duck-typing:
.. _ducktyping:

Duck Typing
-----------

In duck typing, an object is of a given type if it has all methods and properties required by that type.

.. code-block:: php
   
   
   <?php
   
   interface i {
   	function foo() ; 
   }
   
   // class X doesn't implement i, yet it is of type i because it implements foo()
   class X {
   	function foo() {}
   	function bar() {}
   }
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/Duck_typing>`__

See also `Duck Typing in PHP <https://matthiasnoback.nl/2017/02/convenient-ducktyping-in-php/>`_
