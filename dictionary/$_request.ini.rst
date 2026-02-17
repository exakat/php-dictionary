.. _$_request:
.. meta::
	:description:
		$_REQUEST: An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $_REQUEST
	:twitter:description: $_REQUEST: An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $_REQUEST
	:og:type: article
	:og:description: An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$_request.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$_REQUEST","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 13 Feb 2026 12:47:32 +0000","dateModified":"Fri, 13 Feb 2026 12:47:32 +0000","description":"An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$_REQUEST.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$_REQUEST
---------

An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods.

When the same name is used both in GET and POST method, the priority is defined by the ``variable_order`` directive. 

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the ``[]`` format. 

``$_REQUEST`` is a superglobal: it is always available, in every scope.

.. code-block:: php
   
   <?php
   
   // https://www.example.com/index.php?x=1
   $_REQUEST['x'] === '1';
   
   // POST y=abc
   $_REQUEST['y'] === 'abc';
   
   // https://www.example.com/index.php?z[]=def&z[]=ghi
   $_REQUEST['z'] === ['def', 'ghi'];
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.get.php>`__

See also https://x-team.com/magazine/basics-php-request, http://www.shodor.org/~elised/phpTutorial/nileshc_getreqpost.php

Related : :ref:`$_POST <$_post>`, :ref:`$_GET <$_get>`, :ref:`$_COOKIE <$_cookie>`, :ref:`$_ENV <$_env>`, :ref:`Form <form>`, :ref:`Incoming Data <incoming-data>`, :ref:`variable_order <variable_order>`
