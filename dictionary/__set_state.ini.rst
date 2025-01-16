.. _-__set_state:
.. meta::
	:description:
		__set_state() Method: __set_state() is a magic method : it is called when an object has been exported with var_export(), and has to be instantiated again.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __set_state() Method
	:twitter:description: __set_state() Method: __set_state() is a magic method : it is called when an object has been exported with var_export(), and has to be instantiated again
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __set_state() Method
	:og:type: article
	:og:description: __set_state() is a magic method : it is called when an object has been exported with var_export(), and has to be instantiated again
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__set_state.ini.html
	:og:locale: en


__set_state() Method
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
