.. _amp:
.. meta::
	:description:
		AMP (Asynchronous Markup Protocol): AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: AMP (Asynchronous Markup Protocol)
	:twitter:description: AMP (Asynchronous Markup Protocol): AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: AMP (Asynchronous Markup Protocol)
	:og:type: article
	:og:description: AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/amp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/amp.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/amp.ini.html","name":"AMP (Asynchronous Markup Protocol)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:12:40 +0000","dateModified":"Thu, 16 Jul 2026 14:12:40 +0000","description":"AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I\/O framework for building asynchronous applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/AMP (Asynchronous Markup Protocol).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


AMP (Asynchronous Markup Protocol)
----------------------------------

AMP refers to the AMP PHP library, formerly Amp Project, an event-driven, non-blocking I/O framework for building asynchronous applications.

It provides primitives for working with async operations: ``Promises``, ``Futures``, and an event loop. Amp is the foundation behind popular projects like ReactPHP and PHP-PM, and is widely used for building high-concurrency network services, WebSocket servers, and HTTP clients.

In a broader web context, AMP also stands for Accelerated Mobile Pages, a Google-backed project for creating fast-loading mobile web pages.

.. code-block:: php
   
   <?php
   
       use Amp\Loop;
       use Amp\Promise;
   
       Loop::run(function () {
           $result = yield Amp\Promise\resolve('Hello from AMP!');
           echo $result;
       });
   
   ?>


`Documentation <https://amphp.org/>`__

See also `Amp documentation <https://amphp.org/architecture>`_ and `Amp vs ReactPHP <https://amphp.org/faq>`_.

Related : :ref:`ReactPHP <reactphp>`, :ref:`Async <async>`, :ref:`Asynchronous <asynchronous>`, :ref:`Event Loop <event-loop>`, :ref:`Coroutine <coroutine>`, :ref:`Promise <promise>`, :ref:`Fibers <fibers>`, :ref:`Non-blocking <non-blocking>`, :ref:`Concurrency <concurrency>`, :ref:`Microservice <microservice>`, :ref:`Swoole <swoole>`, :ref:`OpenSwoole <openswoole>`

Related packages : `amphp/amp <https://packagist.org/packages/amphp/amp>`_
