.. _break:

Break
-----

Break is a control structure, which ends execution of the current for, foreach, while, do-while or switch structure.

break accepts an optional argument, which tells how many enclosing structures are to be broken out of. 

break should not be confused with `continue` : continue doesn't work in a switch, like a break does.


.. code-block:: php
   
   <?php
   
   foreach([1,2,3] as $b) {
       // break upon the first even number
       if ($b % 2 == 0) {
           break;
       }
       
       echo $b;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.break.php>`__

Related : :ref:`Continue <continue>`, :ref:`Switch <switch>`, :ref:`Loops <loop>`

Added in PHP 5.4
