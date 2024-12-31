.. _methodcall:
.. meta::
	:description:
		Methodcall: A method call is the actual usage of a method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Methodcall
	:twitter:description: Methodcall: A method call is the actual usage of a method
	:twitter:creator: @exakat
	:og:title: Methodcall
	:og:type: article
	:og:description: A method call is the actual usage of a method
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/methodcall.ini.html
	:og:locale: en


Methodcall
----------

A method call is the actual usage of a method. It requires an object, the method name and the arguments for the method. 

A method call is based on an object, and the `->` and `?->` operators. A method call may be static: the operator is then `::`, and the left operand is a class name, expressed as a string; although, it may also be an object, though the class of that object is used, not the object itself.

Methods may be called by using the array syntax: `array($object, $methodname)($arguments)`.

Method call may be chained. This means that the method returns an object, either the current one or another; then another call of method is built on top of this call. 

Static methods must be called statically. Method must be called non-statically, although it is possible to call them statically within a class: this is convenient for `parent::__construct()`, for example. 


.. code-block:: php
   
   <?php
   
   class x {
   	function foo($a) {}
   	
   	static function bar($b) {}
   }
   
   $x = new x;
   
   // a method call
   $x->foo(1);
   [$x, 'foo'](1);
   
   // a static method call
   x::bar(2);
   $x::bar(3);
   x::class::bar(4);
   [x::class, 'bar'](1);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods>`__

Related : :ref:`Fluent Interface <fluid-interface>`
