.. _-__set:
.. meta::
	:description:
		__set() method: __set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __set() method
	:twitter:description: __set() method: __set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it
	:twitter:creator: @exakat
	:og:title: __set() method
	:og:type: article
	:og:description: __set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__set.ini.html
	:og:locale: en


__set() method
--------------

__set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it. It is used to give a value to the property.

That way, it is possible to create dynamically properties, without hardcoding them. 

The __set() method is usually paired with the __get() method. 



.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	// Checks the dictionary, or return 0
   	function __set($name, $value) {
   		if (isset($this->values[$name])) {
   			$this->values[$name] = $value;
   		}
   		
   		//do not set new values
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__get() Method <-__get>`, :ref:`__isset() method <-__isset>`, :ref:`Magic Constants <magic-constant>`
