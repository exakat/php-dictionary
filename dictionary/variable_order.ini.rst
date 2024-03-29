.. _variable_order:

variable_order
--------------

The ``variable_order`` directive sets the order in which the values are assigned to the `$_REQUEST` variable.

The default is `EGPCS` : Environment, GET, POST, COOKIE and SESSION. The values are overwritten by the next, so if GET and POST have both an `x` variable, the default configuration will only keep the one from POST, as it is later in the configuration. 

The default configuration ensures that safer values, such as the session's value, are not overwritten by less safe values from GET or POST, for example.



.. code-block:: php
   
   <?php
   
   // variable_order = EGPCS
   // https://www.example.com/index.php?x=1
   // POST x = 2;
   $_REQUEST['x'] === '2';
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.variables-order>`__

Related : :ref:`$_REQUEST <$_request>`
