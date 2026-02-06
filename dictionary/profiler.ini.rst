.. _profiler:
.. meta::
	:description:
		PHP Profiler: A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Profiler
	:twitter:description: PHP Profiler: A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Profiler
	:og:type: article
	:og:description: A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/profiler.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP Profiler","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 10:24:54 +0000","dateModified":"Fri, 06 Feb 2026 10:24:54 +0000","description":"A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Profiler.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Profiler
------------

A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation.

PHP has several profilers. They may provide an online interface to visualize the results, or a local server, or even a raw execution breakdown, which may then be processed to identify the bottlenecks.

.. code-block:: php
   
   <?php
   
   // code to use with PHP-spx, one of PHP profilers
   
   while ($task = get_next_ready_task()) {
     spx_profiler_start();
     try {
       $task->process();
     } finally {
       spx_profiler_stop();
     }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Profiling_(computer_programming)>`__

See also https://www.blackfire.io/php/, https://gprofiler.io/, https://github.com/perftools/php-profiler.git, https://github.com/reliforp/reli-prof.git, https://www.php.net/manual/en/book.xhprof.php, https://www.xdebug.org/

Related : :ref:`Debugger <debugger>`
