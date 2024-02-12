.. _-__call:

__call() Method
---------------

__call() is a magic method : it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically methods, without hardcoding them. 

The __call() method receives the name of the target-method, and a list of argument, as an array. 

The __call() method has a related version for static methods, called ``__callStatic``.

.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	// Checks the dictionary, or return 0
   	function __call($name, $args) {
   		if (method_exists($this, $name)) {
   			return $this->$name(...$args);
   		}
   		
   		return 0;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `PHP _call (Lesson 3: PHP Magic Methods) <https://dev.to/cleancodestudio/php-call-lesson-3-php-magic-methods-5bi0>`_

Related : :ref:`__callStatic() method <-__callStatic>`, :ref:`Magic Methods <magic-method>`, :ref:`Method <method>`
