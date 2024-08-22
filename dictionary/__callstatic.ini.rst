.. _-__callStatic:

__callStatic() Method
---------------------

__callStatic() is a magic method : it is called when a static method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically static (sic) methods, without hardcoding them. 

The __call() method receives the name of the target-method, and a list of argument. 

The __call() method has a related version for static methods, called `__callStatic`.

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

See also `Understand more magic methods: __callStatic() <https://dev.to/ngodinhcuong/understand-more-magic-methods-callstatic-2828>`_

Related : :ref:`Magic Methods <magic-method>`, :ref:`__callStatic() Method <-__callStatic>`, :ref:`__call() Method <-__call>`
