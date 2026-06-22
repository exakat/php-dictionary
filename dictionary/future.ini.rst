.. _future:
.. meta::
	:description:
		Future: A future is a programming construct representing a value that is not yet available but will be resolved at some point.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Future
	:twitter:description: Future: A future is a programming construct representing a value that is not yet available but will be resolved at some point
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Future
	:og:type: article
	:og:description: A future is a programming construct representing a value that is not yet available but will be resolved at some point
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/future.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Future","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A future is a programming construct representing a value that is not yet available but will be resolved at some point","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Future.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Future
------

A future is a programming construct representing a value that is not yet available but will be resolved at some point. It is closely related to promises: a future is the read-only view of an asynchronous result, while a promise is the write side that resolves or rejects that future.

In languages like Java, Scala, and Dart, futures and promises are distinct objects. In PHP, the distinction is often blurred, and the terms are used interchangeably within async libraries like ReactPHP or Amp.

Futures enable non-blocking code by allowing a computation to proceed without waiting for a result that is not yet ready.

`Documentation <https://en.wikipedia.org/wiki/Futures_and_promises>`__

Related : :ref:`Promise <promise>`, :ref:`Asynchronous <asynchronous>`, :ref:`Fibers <fibers>`, :ref:`Cancellation <cancellation>`

Related packages : `amphp/amp <https://packagist.org/packages/amphp/amp>`_, `react/promise <https://packagist.org/packages/react/promise>`_
