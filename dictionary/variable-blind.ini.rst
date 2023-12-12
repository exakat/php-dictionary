.. _variable-blind:
.. _blind-variable:

Blind Variable
--------------

Blind variables are variables dedicated to a loop. They have a local use, within this loop and rarely after that. 


.. code-block:: php
   
   <?php
   
   foreach($array as $blind => $blindToo) {
       doSomething($blind, $blindToo);
   }
   
   for($i = 0; $i < 10;  ++$i)
       doSomething($i);
   }
   
   ?>

