.. _fallback-function:

Fallback Function
-----------------

A fallback function is a function that replaces a function if its definition is not available in the current namespace. 

PHP has implemented a mechanism so that functions that are undefined in the current namespace, have a fallback in the global space. This is important for backward compatibility, and the native PHP versions.

.. code-block:: php
   
   <?php
   
   namespace A {
   	// A\strtolower doesn't exist, 
   	// it falls back on \strtolower(), in the global space
   	echo strtolower('A');
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.fallback.php>`__
