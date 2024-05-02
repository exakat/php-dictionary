.. _$argc:

$argc
-----

In PHP, ``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line. It represents the argument count (hence the name $argc).

When a PHP script is run from the command line, the script's filename is counted as the first argument, and any additional arguments passed after the filename are also counted. The value of ``$argc`` will be an integer indicating the total number of arguments.

.. code-block:: php
   
   <?php
   
   echo $argc;
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.argc.php>`__

Related : :ref:`$argv <$argv>`
