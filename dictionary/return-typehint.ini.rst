.. _return-typehint:
.. _returntype:

Return Typehint
---------------

Return typehints are the types used for the return values of a method or function. 

They are the same as the argument types, with a few addition : 

+ `void`, which means that no value is returned. (No usage of return, or return with no explicit value)
+ `never`, which means that the function won't return : either it will kill the application, or it will throw an exception.

Return types are ignored when the method throws an exception. 

return typehint are covariant : they get more or equally precise with each new child generation. 



.. code-block:: php
   
   <?php
   
   function foo() : bool {
       if (rand(0,1)) {
           return true;
       } else {
           throw new Exception('e');
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.returning-values.php>`__

Related : :ref:`Type system <typehint>`, :ref:`Return <return>`, :ref:`Covariance <type-covariance>`
