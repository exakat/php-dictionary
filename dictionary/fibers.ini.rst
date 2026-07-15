.. _fibers:
.. _fiber:
.. meta::
	:description:
		Fibers: Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fibers
	:twitter:description: Fibers: Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fibers
	:og:type: article
	:og:description: Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fibers.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fibers.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fibers.ini.html","name":"Fibers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:22:58 +0000","dateModified":"Tue, 14 Jul 2026 06:22:58 +0000","description":"Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fibers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fibers
------

Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application.

They were introduced in version 8.1 and provide cooperative multitasking, as opposed to preemptive multitasking like threads. This means the application controls exactly where execution yields and resumes.

.. code-block:: php
   
   <?php
   
       $fiber = new Fiber(function (): void {
          $value = Fiber::suspend('fiber');
          echo "Value used to resume fiber:", $value, PHP_EOL;
       });
       
       $value = $fiber->start();
       
       echo "Value from fiber suspending:", $value, PHP_EOL;
       
       $fiber->resume('test');
   
   ?>


`Documentation <https://www.php.net/manual/en/language.fibers.php>`__

See also `PHP Fibers: A practical example <https://aoeex.com/phile/php-fibers-a-practical-example/>`_, `Async PHP is Here: A Practical Guide to Fibers <https://fsck.sh/en/blog/practical-guide-to-php-fibers/>`_, `Fibers in PHP - how to make it easier to implement asynchronicity in your project <https://www.sages.io/blog/fibers-in-PHP-how-ulatwic-implement-asynchronicity-in-project>`_, `Unleashing the Power of PHP Fibers: Boost Web Development with Efficient Coroutines <https://phpmagazine.net/2023/03/unleashing-the-power-of-php-fibers-boost-web-development-with-efficient-coroutines.html>`_, `PHP Fibers in Production: 4 Real Cases Where They Beat curl_multi and Queues <https://dev.to/gabrielanhaia/php-fibers-in-production-4-real-cases-where-they-beat-curlmulti-and-queues-39j8>`_ and `PHP Fibers: simplifying async code and speeding up development <https://medium.com/manychat-engineering/php-fibers-simplifying-async-code-and-speeding-up-development-519d40ace2d9>`_.

Related : :ref:`Async <async>`, :ref:`Asynchronous <asynchronous>`, :ref:`Multithreading <multithread>`, :ref:`Blocking Wait <blocking-wait>`, :ref:`Cancellation <cancellation>`, :ref:`Future <future>`, :ref:`Promise <promise>`, :ref:`Actor Model <actor-model>`, :ref:`Channel <channel>`, :ref:`Continuation <continuation>`, :ref:`Fire-and-forget <fire-and-forget>`, :ref:`Green Thread <green-thread>`, :ref:`AMP (Asynchronous Markup Protocol) <amp>`, :ref:`OpenSwoole <openswoole>`, :ref:`ReactPHP <reactphp>`, :ref:`Swoole <swoole>`

Related packages : `amphp/process <https://packagist.org/packages/amphp/process>`_

Added in PHP 8.1+
