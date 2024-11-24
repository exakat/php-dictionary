.. _invoke:

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
