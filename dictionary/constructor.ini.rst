.. _constructor:

constructor
-----------

The constructor is a special method in a class, which is called at instantiation of an object, with the provided arguments. 

In PHP, parents constructors are not automatically called, when a child class defines a constructor. They have to be called manually.



.. code-block:: php
   
   <?php
   
   class X {
       private $property;
       
       function __construct($value) {
           $this->property = $value;
       }
   }
   
   $x = new X(1);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

Related : :ref:`Destructor <destructor>`
