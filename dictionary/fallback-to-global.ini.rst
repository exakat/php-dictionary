.. _fallback-to-global:
.. _fallback:

Fallback To Global
------------------

The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing. 

This feature was introduced as a transition mechanism, when namespaces were introduced. Adding a namespace to a file does not make all the function and constants invalid, but rather still working. This does not apply to classes, interfaces, traits and enumeration, which have to be in the current namespace, or imported with the ``use`` expression.

The fallback mechanism applies to global constants and functions. 

This mechanism is usually transparent to users: PHP behaves with little friction. It introduces the possibility of a man in the middle attack: adding a local definition to a global function or constant will overwrite this function.

There is a penalty cost to use the fallback mechanism, as PHP has to search for the function locally, then globally, before finding it. Using the fully qualified name, or an import expression ``use`` speeds up the process.

.. code-block:: php
   
   <?php
   
   function goo() { echo __FUNCTION__;}
   function hoo() { echo __FUNCTION__;}
   
   namespace A {
   	use function hoo as ioo;
   	
   	function foo() { echo __FUNCTION__;}
   	function hoo() { echo __FUNCTION__;}
   	
   	foo(); // A\foo;
   	goo(); // goo;
   	hoo(); // A\hoo;
   	\hoo(); // hoo
   	ioo(); // A\hoo;
   
   	// this replaces the native PHP strtolower with another function, 
   	// in the A namespace
   	function strtolower($string) { return \strtoupper($string);}
   	
   	echo strtolower('aB');  // AB
   	echo \strtolower('aB'); // ab
   }
   
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.fallback.php>`__
