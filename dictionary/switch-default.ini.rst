.. _switch-default:
.. meta::
	:description:
		Switch Default: A switch default, also called default, is the catch-all option in a switch() or a match() expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Switch Default
	:twitter:description: Switch Default: A switch default, also called default, is the catch-all option in a switch() or a match() expression
	:twitter:creator: @exakat
	:og:title: Switch Default
	:og:type: article
	:og:description: A switch default, also called default, is the catch-all option in a switch() or a match() expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/switch-default.ini.html
	:og:locale: en


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
