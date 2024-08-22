.. _return-value:

Return Value
------------

Return value is the value returned by a method or function call. 

That value may be typed with a data type. It may also be typed with `never`, in case the method doesn't return, or `void`, when the method returns nothing.

A value is returned with the keyword ``return``. When no such command is used, for example when a method doesn't have a return command and reach the end of the method's body, then ``null`` is returned.

.. code-block:: php
   
   <?php
   
   function foo() : int {
       return 1;
   }
   
   function goo() : never {
       throw new Exception("Error");
   }
   
   function hoo() : void {
       echo __METHOD__;
       // No return value
   }
   
   // returns null
   function bar() { }
   ?>
   


`Documentation <https://www.php.net/manual/en/function.include.php>`__
