.. _concurency:
.. meta::
	:description:
		Concurency: Concurrency is a concept in computing where multiple tasks are in progress at the same time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Concurency
	:twitter:description: Concurency: Concurrency is a concept in computing where multiple tasks are in progress at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Concurency
	:og:type: article
	:og:description: Concurrency is a concept in computing where multiple tasks are in progress at the same time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/concurency.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Concurency","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:44:57 +0000","dateModified":"Fri, 16 Jan 2026 17:44:57 +0000","description":"Concurrency is a concept in computing where multiple tasks are in progress at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Concurency.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Concurency
----------

Concurrency is a concept in computing where multiple tasks are in progress at the same time.

PHP uses several ways to handle concurency: 

+ externally, by the webserver or PHP-fpm
+ internally, with forked processes, with pcntl
+ internally, with threads, with parallel
+ cooperating, with fibers
+ non/blocking IO, with swoole or amphp



`Documentation <https://en.wikipedia.org/wiki/Concurrency_(computer_science)>`__

See also https://www.honeybadger.io/blog/php-concurrency/, https://itsimiro.medium.com/understanding-fibers-in-php-a-new-way-to-handle-concurrency-ed07424320ff

Related : :ref:`Thread <thread>`, , :ref:`Asynchronous <asynchronous>`, , , , :ref:`FastCGI Process Manager (FPM) <fpm>`
