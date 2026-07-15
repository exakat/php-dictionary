.. _socket:
.. meta::
	:description:
		Socket: A socket refers to a communication endpoint that allows two processes to exchange data over a network.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Socket
	:twitter:description: Socket: A socket refers to a communication endpoint that allows two processes to exchange data over a network
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Socket
	:og:type: article
	:og:description: A socket refers to a communication endpoint that allows two processes to exchange data over a network
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/socket.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/socket.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/socket.ini.html","name":"Socket","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:37:12 +0000","dateModified":"Sat, 11 Jul 2026 14:37:12 +0000","description":"A socket refers to a communication endpoint that allows two processes to exchange data over a network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Socket.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Socket
------

A socket refers to a communication endpoint that allows two processes to exchange data over a network. Sockets provide a mechanism for processes on different devices to communicate with each other, whether they are on the same machine or across the Internet.

PHP provides a set of functions for working with sockets, allowing developers to create both client and server applications that can communicate over networks using various protocols, including TCP and UDP.

.. code-block:: php
   
   <?php
   
       $server = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
       socket_bind($server, '127.0.0.1', 8080);
       socket_listen($server);
       $client = socket_accept($server);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.sockets.php>`__

See also `PHP and Sockets: Network Programming with PHP <https://reintech.io/blog/php-and-sockets-network-programming>`_.

Related : :ref:`Network <network>`, :ref:`Server <server>`, :ref:`User Datagram Protocol (UDP) <udp>`, :ref:`TCP <tcp>`, :ref:`Polling <polling>`, :ref:`Websocket <websocket>`, :ref:`C10K <c10k>`, :ref:`IMAP <imap>`, :ref:`Non-blocking <non-blocking>`, :ref:`SSH2 <ssh2>`

Related packages : `react/socket <https://packagist.org/packages/react/socket>`_
