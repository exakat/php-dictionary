.. _semicolon:

Semicolon
---------

Semicolon is used to mark the end of a statement. 

It is also used in the for() statement, to separate the initialization, the termination and the increment. When using several statement between those semicolons, they must be separated with a comma.

Semicolons may also be used instead of colons, in a case statement.

Semicolons may be omitted, before a closing PHP tag.



.. code-block:: php
   
   
   <?php
   
   $a = 1; $b = 2;
   
   // multi-statement usage in for()
   for($i = 0, $j = 0; $i < 10; ++$i, ++$j) {
   	print "$i $j\n";
   }
   
   switch($a) {
   	case 1;
   		$a = 2;
   		break;
   		
   	default; 
   		$a = 1;
   }
   
   // semi colon may be omitted before the closing tag.
   $c = 1
   ?>
   


Related : :ref:`Colon <colon>`, :ref:`Switch <switch>`, :ref:`For <for>`, :ref:`Statement <statement>`
