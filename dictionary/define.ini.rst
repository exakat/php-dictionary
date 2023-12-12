.. _define:

define()
--------

define() is a PHP function, that introduces constant definitions. 

define() is a function, and may be called anywhere. It is slower than `const`, as it is only executed at runtime. define() doesn't allow class constants creation.

define() used to create case-insensitive constant, but this was abandoned in PHP 7.3.



.. code-block:: php
   
   
   <?php
       define('HELLO', 'Hello');
       
       print HELLO . " world\n";
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__
