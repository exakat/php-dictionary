.. _-__isset:
.. meta::
	:description:
		__isset() method: __isset() is a magic method : it is called when the existence of a property has to be checked.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __isset() method
	:twitter:description: __isset() method: __isset() is a magic method : it is called when the existence of a property has to be checked
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __isset() method
	:og:type: article
	:og:description: __isset() is a magic method : it is called when the existence of a property has to be checked
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__isset.ini.html
	:og:locale: en


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
