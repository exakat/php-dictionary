.. _excimer:
.. meta::
	:description:
		Excimer: ``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Excimer
	:twitter:description: Excimer: ``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Excimer
	:og:type: article
	:og:description: ``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/excimer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/excimer.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/excimer.ini.html","name":"Excimer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:52:21 +0000","dateModified":"Wed, 15 Jul 2026 13:52:21 +0000","description":"``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Excimer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Excimer
-------

``Excimer`` is a low-overhead sampling profiler for PHP, developed by the Wikimedia Foundation. Unlike deterministic profilers such as Xdebug, which instrument every function call, Excimer periodically samples the call stack at a fixed interval, using a timer signal, which keeps overhead low enough to run in production.

Excimer can sample on wall-clock time or CPU time, which makes it useful for diagnosing both I/O-bound slowness, such as waiting on a database or a remote API, and CPU-bound slowness, such as heavy computation. Samples are collected into a log that can be aggregated into a flame graph or exported for further analysis.

Because sampling is cheap, Excimer is commonly left enabled at low sampling rates in production to catch real-world performance regressions that only appear under production load and traffic patterns, which synthetic benchmarks miss.

.. code-block:: php
   
   <?php
   
       // Sample the call stack every 100ms of wall-clock time.
       $profiler = new ExcimerProfiler();
       $profiler->setPeriod(0.1);
       $profiler->setEventType(EXCIMER_REAL);
       $profiler->start();
   
       // ... application code runs here ...
   
       $profiler->stop();
   
       $log = $profiler->getLog();
       foreach ($log as $event) {
           foreach ($event->getTrace() as $frame) {
               echo $frame['function'] . PHP_EOL;
           }
       }
   
   ?>


`Documentation <https://www.mediawiki.org/wiki/Excimer>`__

See also `Excimer on Packagist <https://packagist.org/packages/wikimedia/php-excimer-ui>`_.

Related : :ref:`Profiling <profiling>`, :ref:`Blackfire <blackfire>`, :ref:`Tideways <tideways>`, :ref:`Xdebug <xdebug>`, :ref:`Flame Graph <flame-graph>`, :ref:`Performance <performance>`
