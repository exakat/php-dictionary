.. _$_request:

$_REQUEST
---------

An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods.

When the same name is used both in GET and POST method, the priority is defined by the `variable_order` directive. 

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the `[]` format. 

$_REQUEST is a superglobal : it is always available, in every scope.


.. code-block:: php
   
   <?php
   
   // https://www.example.com/index.php?x=1
   $_REQUEST['x'] === '1';
   
   // POST y=abc
   $_REQUEST['y'] === 'abc';
   
   // https://www.example.com/index.php?z[]=def&z[]=ghi
   $_REQUEST['z'] === array('def', 'ghi');
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.get.php>`__

Related : :ref:`$_POST <$_post>`, :ref:`$_GET <$_get>`, :ref:`$_COOKIE <$_cookie>`, :ref:`$_ENV <$_env>`, :ref:`Form <form>`, :ref:`Incoming Data <incoming-data>`, :ref:`variable_order <variable_order>`
