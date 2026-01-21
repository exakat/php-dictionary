.. _superglobal:
.. _super-global:
.. _auto-global:
.. _autoglobal:
.. meta::
	:description:
		Superglobal Variables: PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Superglobal Variables
	:twitter:description: Superglobal Variables: PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Superglobal Variables
	:og:type: article
	:og:description: PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/superglobal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Superglobal Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Superglobal Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Superglobal Variables
---------------------

PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls. These variables are called 'superglobals' because they are automatically available in all scopes, including functions, methods, and the global scope.

PHP provides several superglobal variables, each serving a specific purpose. Here are the most commonly used ones:

    $_SERVER: Contains information about the server and execution environment, such as headers, paths, and script locations.

    $_GET: Holds the values of variables passed to the current script via the URL parameters (HTTP GET method).

    $_POST: Stores the values of variables sent to the current script via HTTP POST method (usually from an HTML form).

    $_REQUEST: Contains the values of both $_GET, $_POST, and $_COOKIE variables, providing a convenient way to access user input data.

    $_COOKIE: Holds the values of cookies sent by the client browser to the server.

    $_SESSION: Stores and retrieves session variables, which are used to persist data across multiple requests from the same user.

    $_FILES: Contains information about uploaded files through an HTML form with enctype=\multipart/form-data\.

    $_ENV: Holds variables passed to the PHP script from the server's environment.

PHP superglobal variables are also called autoglobal, or auto-global, as they are implicitly global, without using the ``global`` keyword.

.. code-block:: php
   
   <?php
   
   global $x;
   $x = \A\;
   
   function counter() {
       echo $GLOBALS['A'];
   }
   
   foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.superglobals.php>`__

See also https://www.educative.io/answers/what-are-superglobals-in-php

Related : :ref:`Variables <variable>`, :ref:`Session <session>`, :ref:`Static Variables <static-variable>`, :ref:`Variable Variables <variable-variable>`, :ref:`Global Variables <global-variable>`
