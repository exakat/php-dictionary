.. _profiler:
.. meta::
	:description:
		PHP Profiler: A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Profiler
	:twitter:description: PHP Profiler: A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation
	:twitter:creator: @exakat
	:og:title: PHP Profiler
	:og:type: article
	:og:description: A profiler is an application that helps track execution performances, and spots slow part of the application for optimisation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/profiler.ini.html
	:og:locale: en


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

See also `BlackFire <https://www.blackfire.io/php/>`_, `gProfiler <https://gprofiler.io/>`_, `PHP-profiler <https://github.com/perftools/php-profiler.git>`_, `PHP-reli <https://github.com/reliforp/reli-prof.git>`_, `XHprof <https://www.php.net/manual/en/book.xhprof.php>`_, `Xdebug <https://www.xdebug.org/>`_

Related : :ref:`Debugger <debugger>`
