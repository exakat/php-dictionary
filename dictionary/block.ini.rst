.. _block:

Block
-----

Blocks are none, one or more instructions, grouped together with or without curly brackets.

Blocks may require brackets, like for classes, switch(), function bodies; they might be optional, like with cases, arrow-functions or loops. 


.. code-block:: php
   
   <?php
   
   function foo($a) {
   	if ($a) {
   		$b = 1;
   	} else 
   		$b = 2;
   		
   	return $b;
   }
   ?>

