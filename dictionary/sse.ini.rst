.. _sse:
.. meta::
	:description:
		Server Sent Event (SSE): Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser), over a single HTTP connection.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Server Sent Event (SSE)
	:twitter:description: Server Sent Event (SSE): Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser), over a single HTTP connection
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Server Sent Event (SSE)
	:og:type: article
	:og:description: Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser), over a single HTTP connection
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sse.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Server Sent Event (SSE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser), over a single HTTP connection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Server Sent Event (SSE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Server Sent Event (SSE)
-----------------------

Server-Sent Events, or SSE, is a web technology that allows a server to push real-time updates to a client, often the web browser), over a single HTTP connection. Unlike WebSockets, which are bidirectional, SSE is unidirectional: the server sends data to the client, but the client cannot send data back to the server over the same connection.

.. code-block:: php
   
   <?php
   
   header('Content-Type: text/event-stream');
   header('Cache-Control: no-cache');
   header('Connection: keep-alive');
   
   // Send updates
   while (true) {
       $data = getLiveData(); // Fetch or generate data
       echo data: {$data}\n\n;
       flush(); // Send output to the client immediately
       sleep(1); // Wait before sending the next update
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Real-time_web>`__

See also https://lucidar.me/en/web-dev/server-sent-event-simple-php-example/, https://minompi.medium.com/server-sent-events-with-php-and-symfony-5d6596cc84c8

Related : :ref:`Real Time <real-time>`
