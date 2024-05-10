.. _$_cookie:

$_COOKIE
--------

The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver.

The ``$_COOKIE`` variable is an associative array where the keys are the cookies names and the values are the corresponding values passed in the HTTP headers. 

$_COOKIE is a superglobal : it is always available, in every scope.

Values inside $_COOKIE are always strings, or arrays.


.. code-block:: php
   
   <?php
   
   echo $_COOKIE['username'];
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.cookie.php>`__

Related : :ref:`$_GET <$_get>`, :ref:`$_POST <$_post>`, :ref:`$_REQUEST <$_request>`, :ref:`$_FILES <$_files>`, :ref:`$_SERVER <$_server>`
