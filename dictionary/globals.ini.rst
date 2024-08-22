.. _globals:
.. _$_globals:

$GLOBALS
--------

$GLOBALS is a global variable, that host all other global variables, during a PHP execution. It is also a super-global, because it is always available, even without import. 

.. code-block:: php
   
   <?php
   
   global $x;
   $x = 'A';
   
   function counter() {
       echo $GLOBALS['A'];
   }
   
   foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.globals.php>`__

Related : :ref:`Variables <variable>`, :ref:`Static Variables <static-variable>`, :ref:`Variable Variables <variable-variable>`, :ref:`Global Variables <global-variable>`
