.. _$_cookie:
.. meta::
	:description:
		$_COOKIE: The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $_COOKIE
	:twitter:description: $_COOKIE: The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver
	:twitter:creator: @exakat
	:og:title: $_COOKIE
	:og:type: article
	:og:description: The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$_cookie.ini.html
	:og:locale: en


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

Related : :ref:`$_GET <$_get>`, :ref:`$_POST <$_post>`, :ref:`$_REQUEST <$_request>`, :ref:`$_FILES <$_files>`, :ref:`$_SERVER <$_server>`, :ref:`$_ENV <$_env>`
