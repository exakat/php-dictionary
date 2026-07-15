.. _edge-triggered:
.. _EPOLLET:
.. meta::
	:description:
		Edge Triggered: Edge-triggered is an I/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Edge Triggered
	:twitter:description: Edge Triggered: Edge-triggered is an I/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Edge Triggered
	:og:type: article
	:og:description: Edge-triggered is an I/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/edge-triggered.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/edge-triggered.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/edge-triggered.ini.html","name":"Edge Triggered","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:58:24 +0000","dateModified":"Wed, 15 Jul 2026 13:58:24 +0000","description":"Edge-triggered is an I\/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Edge Triggered.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Edge Triggered
--------------

Edge-triggered is an I/O notification mode where the system notifies a watcher only when the stream transitions from not-ready to ready, rather than continuously while the condition holds.

This is the opposite of level-triggered mode: a level-triggered watcher fires on every poll cycle as long as data is available, while an edge-triggered watcher fires exactly once per new arrival. As a consequence, edge-triggered handlers must drain the buffer completely on each notification, or they risk never being notified about the remaining data.

Edge-triggered mode reduces spurious wake-ups and is more efficient under high throughput, but it demands careful implementation. It maps to ``EPOLLET`` in the Linux epoll API and to ``EV_CLEAR`` in BSD kqueue.

In the future version 8.6, the ``Io\Poll`` API exposes edge-triggered behaviour through the ``Event::EdgeTriggered`` enum case, which can be combined with ``Event::Read`` or ``Event::Write`` when adding a watcher to a ``Context``.

.. code-block:: php
   
   <?php
   
   use Io\Poll\Context;
   use Io\Poll\Event;
   
   $context = new Context();
   
   // Notify only on state transition, not continuously
   $context->add($stream, Event::Read | Event::EdgeTriggered, function ($handle) {
       // Must read until fread() returns false or empty string
       while ($chunk = fread($handle->stream, 8192)) {
           echo $chunk;
       }
   });
   
   $context->run();
   
   ?>


`Documentation <https://man7.org/linux/man-pages/man7/epoll.7.html>`__

See also `PHP RFC: Polling API <https://wiki.php.net/rfc/polling_api>`_.

Related : :ref:`Polling <polling>`, :ref:`Event Loop <event-loop>`, :ref:`Event Driven <event-driven>`, :ref:`Non-blocking <non-blocking>`, :ref:`One-shot <one-shot>`, :ref:`Async <async>`

Added in PHP 8.6
