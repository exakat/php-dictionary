.. _switch-default:

Switch Default
--------------

A switch default, also called default, is the catch-all option in a switch() or a match() expression. 

In a switch(), the default case may be stacked with other cases, to apply the same code. This is not possible with match().



.. code-block:: php
   
   
   <?php
   
   switch($x) {
   	case 'a':
   	default:
   		$a = 1;
   		// fall through
   		
   	case 'b' :
   		$a =2;
   		break 1;
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

Related : :ref:`Default <default>`, :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Switch Case <switch-case>`
