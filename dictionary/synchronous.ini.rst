.. _synchronous:
.. meta::
	:description:
		Synchronous: Synchronous PHP refers to the traditional way PHP applications execute code: synchronously, or in a blocking manner.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Synchronous
	:twitter:description: Synchronous: Synchronous PHP refers to the traditional way PHP applications execute code: synchronously, or in a blocking manner
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Synchronous
	:og:type: article
	:og:description: Synchronous PHP refers to the traditional way PHP applications execute code: synchronously, or in a blocking manner
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/synchronous.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Synchronous","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Synchronous PHP refers to the traditional way PHP applications execute code: synchronously, or in a blocking manner","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Synchronous.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Synchronous
-----------

Synchronous PHP refers to the traditional way PHP applications execute code: synchronously, or in a blocking manner. In synchronous PHP, tasks are executed sequentially, meaning that each task must finish before the next one starts.

When a PHP script encounters a blocking operation, such as a file I/O operation, a database query, or a network request, it waits until that operation completes before proceeding to the next line of code. This sequential execution model can lead to inefficiencies, especially when dealing with tasks that can be performed concurrently.

Synchronous is the default way of working for PHP.


See also `Asynchronous and concurrent HTTP requests in PHP <https://gorannikolovski.com/blog/asynchronous-and-concurrent-http-requests-in-php>`_

Related : :ref:`Asynchronous <asynchronous>`
