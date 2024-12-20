.. _new:

new
---

new creates a new object from a class. This operation is called the instantiation. 

The class must be available at instantiation call : PHP will search for it in the declared classes, then call the autoloader to find it. In case no class is found, and error is emitted.

The instantiation calls immediately the constructor of the object : it is the method called ``__construct``. 

The constructor defines how many arguments are needed. When no argument is needed, new may also be called without parenthesis.



.. code-block:: php
   
   <?php
   
   class x {
       function __construct($a = 1) {}
    }
   
   // instantiation
   $x = new x($a);
   
   $y = new y;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new>`__
