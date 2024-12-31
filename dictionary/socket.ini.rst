.. _socket:
.. meta::
	:description:
		Socket: A socket refers to a communication endpoint that allows two processes on a network to exchange data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Socket
	:twitter:description: Socket: A socket refers to a communication endpoint that allows two processes on a network to exchange data
	:twitter:creator: @exakat
	:og:title: Socket
	:og:type: article
	:og:description: A socket refers to a communication endpoint that allows two processes on a network to exchange data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/socket.ini.html
	:og:locale: en


Socket
------

A socket refers to a communication endpoint that allows two processes on a network to exchange data. Sockets provide a mechanism for processes on different devices to communicate with each other, whether they are on the same machine or across the Internet.

PHP provides a set of functions for working with sockets, allowing developers to create both client and server applications that can communicate over networks using various protocols, including TCP and UDP.

.. code-block:: php
   
   <?php
   
   $server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
   socket_bind($server, '127.0.0.1', 8080);
   socket_listen($server);
   $client = socket_accept($server);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.sockets.php>`__

Related packages : `react/socket <https://packagist.org/packages/react/socket>`_
