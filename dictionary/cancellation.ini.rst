.. _cancellation:
.. meta::
	:description:
		Cancellation: Cancellation is the ability to abort an ongoing asynchronous operation before it completes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cancellation
	:twitter:description: Cancellation: Cancellation is the ability to abort an ongoing asynchronous operation before it completes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cancellation
	:og:type: article
	:og:description: Cancellation is the ability to abort an ongoing asynchronous operation before it completes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cancellation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cancellation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Cancellation is the ability to abort an ongoing asynchronous operation before it completes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cancellation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cancellation
------------

Cancellation is the ability to abort an ongoing asynchronous operation before it completes. In asynchronous and concurrent programming, long-running tasks such as HTTP requests, database queries, or timers may need to be stopped early to conserve resources or respond to user actions.

Cancellation is typically implemented through cancellation tokens: an object passed to an asynchronous operation that signals cancellation on demand. The operation periodically checks the token and stops if cancellation has been requested.

PHP async libraries such as Amp provide ``CancelledException`` and cancellation token support for fibers and promises.

`Documentation <https://amphp.org/amp>`__

Related : :ref:`Future <future>`, :ref:`Promise <promise>`, :ref:`Asynchronous <asynchronous>`, :ref:`Fibers <fibers>`

Related packages : `amphp/amp <https://packagist.org/packages/amphp/amp>`_
