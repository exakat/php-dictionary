.. _switch-case:
.. meta::
	:description:
		Switch Case: A switch case, also called case, is an option in a switch() or a match() expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Switch Case
	:twitter:description: Switch Case: A switch case, also called case, is an option in a switch() or a match() expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Switch Case
	:og:type: article
	:og:description: A switch case, also called case, is an option in a switch() or a match() expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/switch-case.ini.html
	:og:locale: en


Switch Case
-----------

A switch case, also called case, is an option in a switch() or a match() expression. 

In a switch(), several cases may be used in a row, to apply the same code. This is not possible with match().

In a switch(), the case's code is executed until the end of the switch(), or a break command. A case that uses its own code, and the following case's code is called a fallthrough. 

There is a default case, which is called when all other cases fail.

In the event of multiple identical cases, the first one is used. PHP adapts the type of the values while looking for the right case.


.. code-block:: php
   
   
   <?php
   
   switch($x) {
   	case 'a':
   	case 'c':
   		$a = 1;
   		// fall through
   		
   	case 'b' :
   		$a =2;
   		break 1;
   		
   	// default case, when $x is not 'a' 'b' or 'c'
   	default :
   		$a = 3;
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

Related : :ref:`Default <default>`, :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Switch Default <switch-default>`
