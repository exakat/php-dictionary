.. _$argv:

$argv
-----

$argv is a PHP variable that contains an array of the arguments passed to the PHP script, in command line. $argv is not defined when PHP is run in a webserver.

$argv is not a super global : it has to be imported in a non-global scope with the global keyword.



.. code-block:: php
   
   <?php
   
   print_r($argv);
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.argv.php>`__

Related : :ref:`$argc <$argc>`
