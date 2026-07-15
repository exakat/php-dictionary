.. _openswoole:
.. meta::
	:description:
		OpenSwoole: ``OpenSwoole`` is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OpenSwoole
	:twitter:description: OpenSwoole: ``OpenSwoole`` is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OpenSwoole
	:og:type: article
	:og:description: ``OpenSwoole`` is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/openswoole.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/openswoole.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/openswoole.ini.html","name":"OpenSwoole","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:36:43 +0000","dateModified":"Tue, 14 Jul 2026 05:36:43 +0000","description":"``OpenSwoole`` is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/OpenSwoole.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


OpenSwoole
----------

``OpenSwoole`` is a PIE extension providing an event-driven, asynchronous, coroutine-based programming framework for PHP. It is a community fork of Swoole, created after a licensing and governance disagreement, and both projects share most of their API and internals.

OpenSwoole replaces PHP's traditional request/response, process-per-request model with a long-running server process: an HTTP, WebSocket, or TCP/UDP server that stays resident in memory, handles many connections concurrently through coroutines, and dispatches blocking calls, such as database queries or file I/O, transparently as non-blocking, cooperative tasks. This removes most of the per-request bootstrap cost, such as re-parsing configuration or re-establishing framework state, that a classic PHP-FPM request pays every time.

Because the process is long-running, code that assumes a fresh, request-scoped global state, a common assumption in traditional PHP applications, must be written carefully to avoid leaking state between requests handled by the same worker.

.. code-block:: php
   
   <?php
   
       $server = new OpenSwoole\Http\Server('0.0.0.0', 9501);
   
       $server->on('request', function ($request, $response) {
           $response->header('Content-Type', 'text/plain');
           $response->end('Hello from OpenSwoole' . PHP_EOL);
       });
   
       $server->start();
   
   ?>


`Documentation <https://openswoole.com/docs>`__

See also `OpenSwoole project <https://openswoole.com/>`_.

Related : :ref:`Swoole <swoole>`, :ref:`Coroutine <coroutine>`, :ref:`Fibers <fibers>`, :ref:`Green Thread <green-thread>`, :ref:`Asynchronous <asynchronous>`, :ref:`Parallel <parallel>`

Related packages : `openswoole/core <https://packagist.org/packages/openswoole/core>`_
