.. _instance:
.. _instantiate:
.. _instantiation:

instance
--------

An instance is an object with a class. The class provides the definitions of the behavior of that object, while the object holds the specific data. 

The creation of an instance, called instantiation, is done with the `new` keyword. 


.. code-block:: php
   
   <?php
   
   class x {
   	private int $property;
   	
   	function __construct(int $arg) {
   		$this->propety = $arg;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new>`__
