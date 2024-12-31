.. _instance:
.. _instantiate:
.. _instantiation:
.. meta::
	:description:
		instance: An instance is an object with a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instance
	:twitter:description: instance: An instance is an object with a class
	:twitter:creator: @exakat
	:og:title: instance
	:og:type: article
	:og:description: An instance is an object with a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/instance.ini.html
	:og:locale: en


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
