.. _invoke:
.. meta::
	:description:
		Invoke: It is possible to invoke an object, that means calling a function built with the object as the function name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Invoke
	:twitter:description: Invoke: It is possible to invoke an object, that means calling a function built with the object as the function name
	:twitter:creator: @exakat
	:og:title: Invoke
	:og:type: article
	:og:description: It is possible to invoke an object, that means calling a function built with the object as the function name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/invoke.ini.html
	:og:locale: en


Invoke
------

It is possible to invoke an object, that means calling a function built with the object as the function name. 

Invocation is based on the ``__invoke`` magic method. 

.. code-block:: php
   
   <?php
   
   class x {
   	function __invoke($a) {
   		echo 'I am '.$a;
   	}
   }
   
   $x = new x;
   $x('x'); // I am x
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#object.invoke>`__

Related : :ref:`Magic Methods <magic-method>`, :ref:`__invoke() Method <-__invoke>`
