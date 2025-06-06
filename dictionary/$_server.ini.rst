.. _$_server:
.. meta::
	:description:
		$_SERVER: The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $_SERVER
	:twitter:description: $_SERVER: The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $_SERVER
	:og:type: article
	:og:description: The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$_server.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$_SERVER","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$_SERVER.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

Related : :ref:`$_POST <$_post>`, :ref:`$_GET <$_get>`, :ref:`$_FILES <$_files>`, :ref:`$_COOKIE <$_cookie>`, :ref:`$_ENV <$_env>`
