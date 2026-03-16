.. _udp:
.. meta::
	:description:
		User Datagram Protocol (UDP): UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: User Datagram Protocol (UDP)
	:twitter:description: User Datagram Protocol (UDP): UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: User Datagram Protocol (UDP)
	:og:type: article
	:og:description: UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/udp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Uncaught TypeError: Cannot assign string to class constant X::D of type int.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Uncaught TypeError: Cannot assign string to class constant X::D of type int.html","name":"User Datagram Protocol (UDP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/User Datagram Protocol (UDP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


User Datagram Protocol (UDP)
----------------------------

UDP, or User Datagram Protocol, is a core communication protocol used on the Internet, alongside TCP.

UDP is connectionless: UDP does not establish a connection before sending data. It simply sends packets, called datagrams, to the destination without checking if the recipient is ready or available.

UDP is fast and lightweight: Because it skips the handshake and error-checking steps, UDP is faster and uses fewer resources than TCP.

UDP is unreliable: UDP does not guarantee delivery, order, or error correction. Packets may be lost, duplicated, or arrive out of order.

UDP is often associated, or opposed to TCP.

In PHP, UDP is supported through socket programming. PHP provides functions to create, bind, send, and receive UDP datagrams using the ``ext/socket`` extension. 


.. code-block:: php
   
   <?php
   // Create a UDP socket
   $socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
   
   if ($socket === false) {
       $error = socket_last_error();
       die('socket_create() failed: ' . socket_strerror($error));
   }
   
   echo UDP socket created successfully.\n;
   ?>


`Documentation <https://en.wikipedia.org/wiki/User_Datagram_Protocol>`__

See also https://medium.com/@.Chromax/building-a-udp-server-gaming-client-and-tic-tac-toe-game-with-php-83409d89896e, https://www.robertprice.co.uk/robblog/using_php_to_send_a_udp_message-shtml/

Related : :ref:`TCP <tcp>`, :ref:`Internet Protocol (IP) <ip>`
