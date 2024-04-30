.. _$_server:
.. _$_SERVER:

$_SERVER
--------

The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations.

The entries in this array are created by the web server, therefore there is no guarantee that every web server will provide any of these.

The ``$_SERVER`` variable is an associative array where the keys are the variable names and the values are the corresponding values.

``$_SERVER`` is a superglobal : it is always available, in every scope.



.. code-block:: php
   
   <?php
   
   echo $_SERVER['PHP_SELF'];
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.server.php>`__

Related : :ref:`$_POST <$_post>`, :ref:`$_GET <$_get>`, :ref:`$_FILES <$_files>`
