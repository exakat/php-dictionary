.. _glob:

glob()
------

glob() is a function that finds pathnames matching a pattern.

The glob() function is not related to the global keyword.


.. code-block:: php
   
   <?php
   foreach (glob("*.txt") as $filename) {
       echo "$filename size " . filesize($filename) . "\n";
   }
   ?>


`Documentation <https://www.php.net/manual/en/function.glob.php>`__
