.. _event-loop:
.. meta::
	:description:
		Event Loop: An event loop is a mechanism for handling asynchronous operations and event-driven programming.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Event Loop
	:twitter:description: Event Loop: An event loop is a mechanism for handling asynchronous operations and event-driven programming
	:twitter:creator: @exakat
	:og:title: Event Loop
	:og:type: article
	:og:description: An event loop is a mechanism for handling asynchronous operations and event-driven programming
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/event-loop.ini.html
	:og:locale: en


Event Loop
----------

An event loop is a mechanism for handling asynchronous operations and event-driven programming. While PHP traditionally follows a synchronous execution model where each operation blocks the execution until it completes, the introduction of event loops enables non-blocking I/O operations and improves concurrency.

PHP event loops are often implemented using extensions like ReactPHP or Amp. 

`Documentation <https://en.wikipedia.org/wiki/Event_loop>`__

See also `ReactPHP <https://reactphp.org/>`_, `AMPHP <https://amphp.org/>`_

Related : :ref:`Event Driven <event-driven>`
