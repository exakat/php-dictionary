.. _one-shot:
.. _one-shot-mode:
.. _EPOLLONESHOT:
.. meta::
	:description:
		One-shot: One-shot is an I/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: One-shot
	:twitter:description: One-shot: One-shot is an I/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: One-shot
	:og:type: article
	:og:description: One-shot is an I/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/one-shot.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"One-shot","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 08:51:44 +0000","dateModified":"Fri, 03 Jul 2026 08:51:44 +0000","description":"One-shot is an I\/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/One-shot.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


One-shot
--------

One-shot is an I/O watcher mode where the handler fires exactly once and is automatically deregistered after the first event. Subsequent activity on the same stream does not trigger the callback until the watcher is explicitly re-added.

This avoids the need for manual cleanup and is useful for request/response patterns where a stream is expected to produce a single meaningful event: accept one connection, read one response, write one payload.

Without one-shot semantics, a persistent watcher must be explicitly removed inside its own callback to prevent it from firing again, which is error-prone under concurrent conditions.

One-shot maps to ``EPOLLONESHOT`` in the Linux epoll API. In version 8.6, the ``Io\Poll`` API exposes this behaviour through the ``Event::OneShot`` enum case, combinable with ``Event::Read`` or ``Event::Write``.

.. code-block:: php
   
   <?php
   
   use Io\Poll\Context;
   use Io\Poll\Event;
   
   $context = new Context();
   
   // Fires once then the watcher is removed automatically
   $context->add($stream, Event::Read | Event::OneShot, function ($handle) {
       $data = fread($handle->stream, 8192);
       echo 'Received: ' . $data;
       // No need to call $context->remove() manually
   });
   
   $context->run();
   
   ?>


`Documentation <https://man7.org/linux/man-pages/man7/epoll.7.html>`__

See also `PHP RFC: Poll API <https://wiki.php.net/rfc/poll_api>`_.

Related : :ref:`Polling <polling>`, :ref:`Event Loop <event-loop>`, :ref:`Edge Triggered <edge-triggered>`, :ref:`Non-blocking <non-blocking>`, :ref:`Async <async>`

Added in PHP 8.6
