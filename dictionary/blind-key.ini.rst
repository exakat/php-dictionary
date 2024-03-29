.. _blind-variable:
.. _blind-key:

Blind Variable
--------------

A blind variable is a variable that is needed in an expression, but doesn't carry much semantic value. This is the case in loops, where the local variable is needed for the processing of each element, but is often a generic name.

Blind variables are defined in the host structure. 

Blind variables are expected to be used only within their structure, although they do exist beyond. 


.. code-block:: php
   
   <?php
   
   // $key and $value are blind variables
   foreach(source() as $key => $value) {
   	doSomething($key, $value);
   }
   
   
   // standard loop syntax
   for($i = 0; $i < 10; ++$i) {
   	doSomething($i);
   }
   
   ?>

