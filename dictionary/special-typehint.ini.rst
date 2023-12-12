.. _special-typehint:

Special Typehints
-----------------

PHP defines some special typehints.

+ mixed : any type
+ void : no returned value
+ callable : may be used as a callback
+ iterable : may be used with foreach(), including array
+ never : never returns
+ object : object of any class
+ parent : any of the parent class of the current class, excluding it
+ self : the current class
+ static : the current called class

Other special types are the scalar types. 



.. code-block:: php
   
   <?php
   function foo(iterable $i) : never {
       foreach ($i as $j) {
           echo $j;
       }
   
       die();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

Related : :ref:`Type system <typehint>`, :ref:`Special Typehints <special-typehint>`

Added in PHP 7.0
