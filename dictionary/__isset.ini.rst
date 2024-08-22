.. _-__isset:

__isset() method
----------------

__isset() is a magic method : it is called when the existence of a property has to be checked.

That way, it is possible to create dynamically properties, without hardcoding them. 

The __isset() method is usually paired with the __get() and __set() methods. 



.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	function __isset($name) {
   		return isset($this->values[$name]);
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.overloading.php#object.isset>`__

Related : :ref:`Magic Methods <magic-method>`, :ref:`__set() method <-__set>`, :ref:`__get() Method <-__get>`
