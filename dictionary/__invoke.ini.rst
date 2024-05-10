.. _-__invoke:

__invoke() method
-----------------

The __invoke() magic method is called when a script calls an object as a function. This type of class is also called a functor. 

The method is able to take an arbitrary number of argument. 

When a class has the ``__invoke`` class, it is possible to can a method without mentioning its name: the object is the method.


.. code-block:: php
   
   <?php
   // extracted from the PHP manual
   	class CallableClass
   	{
   	    public function __invoke($x)
   	    {
   	        var_dump($x);
   	    }
   	}
   
   	$obj = new CallableClass;
   	$obj(5);
   	var_dump(is_callable($obj));
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.invoke>`__

See also `PHP __invoke <https://www.phptutorial.net/php-oop/php-__invoke/>`_

Related : :ref:`Magic Methods <magic-method>`
