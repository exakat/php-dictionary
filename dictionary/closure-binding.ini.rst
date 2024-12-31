.. _closure-binding:
.. meta::
	:description:
		Closure Binding: A closure acquires values from its context of creation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closure Binding
	:twitter:description: Closure Binding: A closure acquires values from its context of creation
	:twitter:creator: @exakat
	:og:title: Closure Binding
	:og:type: article
	:og:description: A closure acquires values from its context of creation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/closure-binding.ini.html
	:og:locale: en


Closure Binding
---------------

A closure acquires values from its context of creation. When the closure is created in a different context that wished, one may rebind the closure to another context.

This is done with the two methods Closure::bind() and Closure::bintTo().


.. code-block:: php
   
   <?php
   class A {
       private static function foo() { return 1;}
   }
   
   $closure = function() {
       // Self is undefined here, since it is not inside a class
       return self::foo();
   };
   
   // Self now defined, and set to A
   $bcl1 = Closure::bind($closure, null, 'A');
   
   ?>


`Documentation <https://www.php.net/manual/en/closure.bind.php>`__

Related : :ref:`Closure <closure>`
