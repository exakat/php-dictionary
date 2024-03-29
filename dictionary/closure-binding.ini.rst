.. _closure-binding:

Closure Binding
---------------

A closure acquires values from its context of creation. When the closure is created in a different context that wished, one may rebind the closure to another context.

This is done with the two methods Closure::bind() and Closure::bintTo().


.. code-block:: php
   
   <?php
   class A {
       private static function foo() { return 1;}
   }
   
   $closure = function() {
       // Self is undefined here, since it is not inside a class
       return self::foo();
   };
   
   // Self now defined, and set to A
   $bcl1 = Closure::bind($closure, null, 'A');
   
   ?>


`Documentation <https://www.php.net/manual/en/closure.bind.php>`__

Related : :ref:`Closure <closure>`
