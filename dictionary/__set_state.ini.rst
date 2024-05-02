.. _-__set_state:

__set_state() method
--------------------

__set_state() is a magic method : it is called when an object has been exported with var_export(), and has to be instantiated again. 

__set_state() is tasked with recreating the object, assigning the previous values to it, and recreating any missing properties, such as database connections or resources.

The __set_state() method has no counterpart : var_export() do not use any magic method. 

__set_state() is a static method, unlike the other magic methods.



.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	// Checks the dictionary, or return 0
       public static function __set_state($array)
       	$object = new self();
   
   		// This takes advantage of PHP object invasion
       	$object->values['a'] = $array['a'] ?? '0';
       	$object->values['b'] = $array['b'] ?? '0';
   		
   		return $object;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#object.set-state>`__

Related : :ref:`Magic Methods <magic-method>`, :ref:`Object Invasion <object-invasion>`
