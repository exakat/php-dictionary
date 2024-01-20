.. _assumption:

Assumption
----------

An assumption is a piece of code that makes use of knowledge that is not visible in the script. 

Assumptions are often related to arrays : after checking that a variable is of type array, some specific index are used, while there is not guarantee that they are available.

Assumptions may be upgraded to assertions. 



.. code-block:: php
   
   
   <?php
   
   function foo($o) {
   	if ($o instanceof A) {
   		print $o->getName();
   	} else {
   		// if $o is not an object of type A, then it is an array. Where does this come from? 
   		print $o['name'];
   
   		// if $o is an array, is 'name' always available?
   		
   	}
   }
   
   ?>
   


See also `From assumptions to assertions <https://rskuipers.com/entry/from-assumptions-to-assertions>`_

Related : :ref:`Assertions <assertion>`
