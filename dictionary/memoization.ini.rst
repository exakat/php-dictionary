.. _memoization:

Memoization
-----------

Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results. 

Usually, memoization trades processing time with memory. The best suited situation are when the load takes some time to process, and the result is a small amount of memory, such as a count. 

.. code-block:: php
   
   <?php
   
   function docs($file) {
       // local cache 
       static $cache = [];
       
       // If it was already cached, use it. 
       // Docs are supported to be constant during the execution
       if (isset($cache[$file])) {
           return $cache[$file];
       }
       
       $cache[$file] = file_get_contents($file) ?? '';
   }
   
   ?>


`Documentation <https://eddmann.com/posts/implementing-and-using-memoization-in-php/>`__

Added in PHP 4.0+
