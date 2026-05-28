.. _php-input:
.. meta::
	:description:
		php://input: ``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: php://input
	:twitter:description: php://input: ``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: php://input
	:og:type: article
	:og:description: ``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-input.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"php:\/\/input","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"``php:\/\/input`` is a special read-only stream that gives access the raw body of an incoming HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/php:\/\/input.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


php://input
-----------

``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request. It does not work with CLI environment.

When a browser sends data to the web server, PHP parses it into superglobals like ``$_POST``. But sometimes the exact raw payload is needed: that's where ``php://input`` comes in.

The raw data used to be accessed via ``$HTTP_RAW_POST_DATA``, but this is a deprecated feature.

.. code-block:: php
   
   <?php
   
       $incoming = file_get_contents('php://input');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.php.php>`__

See also `How to receive JSON POST with PHP ? <https://www.geeksforgeeks.org/php/how-to-receive-json-post-with-php/>`_.

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Stream <stream>`, :ref:`file_get_contents() <file_get_contents>`, :ref:`$HTTP_RAW_POST_DATA <$HTTP_RAW_POST_DATA>`
