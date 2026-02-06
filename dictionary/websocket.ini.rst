.. _websocket:
.. meta::
	:description:
		Websocket: WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Websocket
	:twitter:description: Websocket: WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Websocket
	:og:type: article
	:og:description: WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/websocket.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Websocket","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 10:35:05 +0000","dateModified":"Fri, 06 Feb 2026 10:35:05 +0000","description":"WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Websocket.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Websocket
---------

WebSockets are a communication protocol that enables full-duplex, real-time communication between a client, such as a a web browser, and a server over a single, persistent TCP connection. Unlike traditional HTTP requests, which are stateless and require a new connection for each request/response cycle, WebSockets keep the connection open, allowing both the client and server to send and receive data anytime without needing to re-establish a connection.

PHP does not have built-in WebSocket support. There are libraries like Ratchet or write a custom WebSocket server using PHP’s socket functions.

`Documentation <https://developer.mozilla.org/en-US/docs/Web/API/WebSockets_API>`__

See also https://dev.to/robertobutti/websocket-with-php-4k2c, https://ably.com/topic/websockets-php

Related : :ref:`Socket <socket>`

Related packages : `cboden/ratchet <https://packagist.org/packages/cboden/ratchet>`_, `textalk/websocket <https://packagist.org/packages/textalk/websocket>`_
