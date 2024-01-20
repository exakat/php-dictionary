.. _return-value:

Return Value
------------

Return value is the value returned, at the end of a method call. That value may be typed with a data type. It may also be typed with `never`, in case the method doesn't return, or `void`, when the method returns nothing. 



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
   ?>
   


`Documentation <https://www.php.net/manual/en/function.include.php>`__
