.. _include:
.. _include_once:
.. _require_once:
.. _require:

include
-------

Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution. It may define new structures, and execute code. 

Inclusion relies on four language structures : include, require, include_once, require_once. 

Inclusion is often hidden in autoload() functions : the code is included class per class, upon request. 



.. code-block:: php
   
    vars.php
   <?php
   
   $color = 'green';
   $fruit = 'apple';
   
   ?>
   
   test.php
   <?php
   
   echo "A $color $fruit"; // A
   
   include 'vars.php';
   
   echo "A $color $fruit"; // A green apple
   
   ?>
   


`Documentation <https://www.php.net/manual/en/function.include.php>`__
