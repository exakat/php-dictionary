.. _concurrency:
.. _concurency:
.. meta::
	:description:
		Concurrency: Concurrency is a concept in computing where multiple tasks are in progress at the same time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Concurrency
	:twitter:description: Concurrency: Concurrency is a concept in computing where multiple tasks are in progress at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Concurrency
	:og:type: article
	:og:description: Concurrency is a concept in computing where multiple tasks are in progress at the same time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/concurrency.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/concurrency.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/concurrency.ini.html","name":"Concurrency","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:22:43 +0000","dateModified":"Tue, 14 Jul 2026 06:22:43 +0000","description":"Concurrency is a concept in computing where multiple tasks are in progress at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Concurrency.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Concurrency
-----------

Concurrency is a concept in computing where multiple tasks are in progress at the same time.

PHP uses several ways to handle concurrency:

+ Externally, by the webserver or PHP-fpm
+ Internally, with forked processes, with pcntl
+ Internally, with threads, with parallel
+ Cooperating, with fibers
+ Non-blocking IO, with swoole or amphp.

`Documentation <https://en.wikipedia.org/wiki/Concurrency_(computer_science)>`__

See also `FrankenPHP <https://frankenphp.dev/>`_, `swoole <https://wiki.swoole.com/en/#/>`_, `OpenSwoole project <https://openswoole.com/>`_, `AMPHP <https://amphp.org/>`_, `Understanding Concurrency in PHP <https://www.honeybadger.io/blog/php-concurrency/>`_, `Understanding Fibers in PHP: A New Way to Handle Concurrency <https://itsimiro.medium.com/understanding-fibers-in-php-a-new-way-to-handle-concurrency-ed07424320ff>`_ and `PHP is 5x Faster Than NestJS? Rethinking High-Load with Swoole <https://dev.to/roman_shneer_9301c1e5f2fd/headline-php-is-5x-faster-than-nestjs-rethinking-high-load-with-swoole-31di>`_.

Related : :ref:`Thread <thread>`, :ref:`Process <process>`, :ref:`Asynchronous <asynchronous>`, :ref:`FastCGI Process Manager (FPM) <fpm>`, :ref:`Atomic Operation <atomic-operation>`, :ref:`file_put_contents() <file_put_contents>`, :ref:`Mutex <mutex>`, :ref:`Race Condition <race-condition>`, :ref:`Actor Model <actor-model>`, :ref:`Cache Stampede <cache-stampede>`, :ref:`Green Thread <green-thread>`, :ref:`Software Transactional Memory (STM) <software-transactional-memory>`, :ref:`AMP (Asynchronous Markup Protocol) <amp>`, :ref:`ReactPHP <reactphp>`, :ref:`Semaphore <sem>`, :ref:`Shared Memory <shared-memory>`, :ref:`Shared <shared>`
