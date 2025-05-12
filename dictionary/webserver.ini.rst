.. _webserver:
.. meta::
	:description:
		Webserver: A web server is a computer system or software application that delivers web pages to users over the internet.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Webserver
	:twitter:description: Webserver: A web server is a computer system or software application that delivers web pages to users over the internet
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Webserver
	:og:type: article
	:og:description: A web server is a computer system or software application that delivers web pages to users over the internet
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/webserver.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Webserver","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 02 May 2025 16:30:56 +0000","dateModified":"Fri, 02 May 2025 16:30:56 +0000","description":"A web server is a computer system or software application that delivers web pages to users over the internet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Webserver.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Webserver
---------

A web server is a computer system or software application that delivers web pages to users over the internet. It handles requests from clients (typically web browsers) and responds by serving content like HTML pages, images, videos, or other files.

PHP is able to be integrated in many webservers: Apache, nginx, lighthttpd, Litespeed,...

PHP is able to run in server mode. In command line, use the ``-S`` option. 

.. code-block:: php
   
   php -S localhost:8000 index.php


`Documentation <https://www.php.net/manual/en/features.commandline.php>`__

See also `Built-in web server <https://www.php.net/manual/en/features.commandline.webserver.php>`_, `Installation and Configuration <https://www.php.net/manual/en/install.php>`_

Related : :ref:`Command Line Interface (CLI) <cli>`
