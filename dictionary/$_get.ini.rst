.. _$_get:
.. meta::
	:description:
		$_GET: The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $_GET
	:twitter:description: $_GET: The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters
	:twitter:creator: @exakat
	:og:title: $_GET
	:og:type: article
	:og:description: The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$_get.ini.html
	:og:locale: en


$_GET
-----

The ``$_GET`` variable is a special superglobal variable that is used to retrieve data from the query string or URL parameters. When a user submits a form using the HTTP GET method or includes parameters in the URL, PHP populates the ``$_GET`` variable with key-value pairs representing those parameters.

The ``$_GET`` variable is an associative array where the keys are the parameter names and the values are the corresponding values passed in the URL. 

The received values are strings or arrays. They are strings by default, and other scalar types needs a casting to have the correct type. The values are arrays when the URL uses the `[]` format : that format handles arrays and map.  

$_GET is a superglobal : it is always available, in every scope.

Values inside $_GET are always strings, or arrays. `https://www.site.com/index.php?x=1` or `https://www.site.com/index.php?x[2]=1`.


.. code-block:: php
   
   <?php
   
   // https://www.example.com/index.php?x=1
   $_GET['x'] === '1';
   
   // https://www.example.com/index.php?y=abc
   $_GET['y'] === 'abc';
   
   // https://www.example.com/index.php?z[]=def&z[][]=ghi
   $_GET['z'] === array('def', array('ghi'));
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.get.php>`__

Related : :ref:`$_POST <$_post>`, :ref:`$_REQUEST <$_request>`, :ref:`$_FILES <$_files>`, :ref:`$_SERVER <$_server>`, :ref:`$_COOKIE <$_cookie>`, :ref:`$_ENV <$_env>`, :ref:`Form <form>`, :ref:`Incoming Data <incoming-data>`, :ref:`Query String <query-string>`
