.. _-__get:

__get() Method
--------------

__get() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically properties, without hardcoding them. 

The __get() method is usually paired with the __set() method. 



.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	// Checks the dictionary, or return 0
   	function __get($name) {
   		if (isset($this->values[$name])) {
   			return $this->values[$name];
   		}
   		
   		return 0;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `What are magic methods and how to use them in PHP ? <https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/>`_

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__set() method <-__set>`, :ref:`__isset() method <-__isset>`, :ref:`Magic Constants <magic-constant>`
