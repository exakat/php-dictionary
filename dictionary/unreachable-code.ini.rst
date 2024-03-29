.. _unreachable-code:

Unreachable Code
----------------

Unreachable code refers to a section of code within a program that can never be executed during the program's runtime. It means that the code is written in such a way that it can never be reached or accessed by the program's execution flow.

Unreachable code can occur due to several reasons:

+ Conditional statements
+ Early return statements
+ Infinite loops
+ Branching with goto, yield, break, return, die...



.. code-block:: php
   
   <?php
   
   $a = 1;
   echo foo($a);
   
   exit; 
   
   // This is unreachable code, as it will never be executed
   echo $a; 
   
   // This is not unreachable, as PHP scoops the definition at linting time
   function foo($s) {
   	return strtolower($s);
   }
   
   ?>

