.. _non-blocking:
.. _non-blocking-stream:
.. meta::
	:description:
		Non-blocking: Non-blocking I/O is a mode where read and write operations return immediately, even if no data is available or the buffer is full, instead of suspending execution until the operation can complete.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non-blocking
	:twitter:description: Non-blocking: Non-blocking I/O is a mode where read and write operations return immediately, even if no data is available or the buffer is full, instead of suspending execution until the operation can complete
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non-blocking
	:og:type: article
	:og:description: Non-blocking I/O is a mode where read and write operations return immediately, even if no data is available or the buffer is full, instead of suspending execution until the operation can complete
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/non-blocking.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/non-blocking.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/non-blocking.ini.html","name":"Non-blocking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:55:10 +0000","dateModified":"Wed, 15 Jul 2026 13:55:10 +0000","description":"Non-blocking I\/O is a mode where read and write operations return immediately, even if no data is available or the buffer is full, instead of suspending execution until the operation can complete","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Non-blocking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Non-blocking
------------

Non-blocking I/O is a mode where read and write operations return immediately, even if no data is available or the buffer is full, instead of suspending execution until the operation can complete.

``stream_set_blocking($stream, false)`` switches a stream to non-blocking mode. A subsequent ``fread()`` returns an empty string rather than waiting, and ``fwrite()`` may write fewer bytes than requested. The caller is responsible for retrying.

Non-blocking I/O is a prerequisite for multiplexing multiple streams efficiently. ``stream_select()`` and the PHP 8.6 ``Io\Poll`` API both require streams to be in non-blocking mode: they watch which streams are ready, then hand control to the caller who reads/writes without risk of blocking.

The alternative is blocking I/O, the default, where each operation parks the process until completion. Blocking is simpler but limits a single process to one active stream at a time.

.. code-block:: php
   
   <?php
   
       $server = stream_socket_server('tcp://0.0.0.0:8080');
       stream_set_blocking($server, false); // non-blocking accept
       
       $client = stream_socket_client('tcp://example.com:80');
       stream_set_blocking($client, false); // non-blocking read/write
       
       fwrite($client, "GET / HTTP/1.0\r\nHost: example.com\r\n\r\n");
       
       // stream_select() waits until $client is readable, then fread() returns immediately
       $read = [$client];
       $write = $except = null;
       if (stream_select($read, $write, $except, 5) > 0) {
           echo fread($client, 8192);
       }
       
       // PHP 8.6: Io\Poll requires non-blocking streams
       use Io\Poll\Context;
       use Io\Poll\Event;
       
       $context = new Context();
       $context->add($client, Event::Read, fn($h) => echo fread($h->stream, 8192));
       $context->run();
   
   ?>


`Documentation <https://www.php.net/manual/en/function.stream-set-blocking.php>`__

See also `stream_select <https://www.php.net/manual/en/function.stream-select.php>`_ and `PHP RFC: Poll API <https://wiki.php.net/rfc/poll_api>`_.

Related : :ref:`Blocking Wait <blocking-wait>`, :ref:`Polling <polling>`, :ref:`Event Loop <event-loop>`, :ref:`Stream <stream>`, :ref:`Socket <socket>`, :ref:`Async <async>`, :ref:`Edge Triggered <edge-triggered>`, :ref:`One-shot <one-shot>`
