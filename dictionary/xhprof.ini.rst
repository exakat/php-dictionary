.. _xhprof:
.. meta::
	:description:
		XHProf: XHProf is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: XHProf
	:twitter:description: XHProf: XHProf is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: XHProf
	:og:type: article
	:og:description: XHProf is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/xhprof.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/xhprof.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/xhprof.ini.html","name":"XHProf","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:38:43 +0000","dateModified":"Thu, 16 Jul 2026 04:38:43 +0000","description":"XHProf is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/XHProf.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


XHProf
------

XHProf is a hierarchical, function-level profiler for PHP, originally developed at Facebook and later open-sourced. It measures wall-clock time, CPU time, and memory usage for every function call during a request, and produces a call graph that highlights the most expensive code paths.

Unlike step debuggers such as Xdebug, XHProf is designed to run with low overhead in production or staging environments, sampling real traffic rather than a single manually-triggered debug session. Its output can be rendered as a flat report or as a visual call graph, callgrind-style, to spot bottlenecks quickly.

Modern forks and alternatives, such as Tideways' extension or the ``excimer`` sampling profiler, build on the same ideas, but XHProf remains a common reference point when discussing PHP profiling.

.. code-block:: php
   
   <?php
   
       xhprof_enable(XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);
   
       run_expensive_task();
   
       $data = xhprof_disable();
   
       include_once '/path/to/xhprof_lib/utils/xhprof_lib.php';
       include_once '/path/to/xhprof_lib/utils/xhprof_runs.php';
   
       $xhprofRuns = new XHProfRuns_Default();
       $runId = $xhprofRuns->save_run($data, 'my_app');
   
   ?>


`Documentation <https://www.php.net/manual/en/book.xhprof.php>`__

See also `XHprof (PHP manual) <https://www.php.net/manual/en/book.xhprof.php>`_ and `XHProf on GitHub <https://github.com/longxinH/xhprof>`_.

Related : :ref:`Profiling <profiling>`, :ref:`PHP Profiler <profiler>`, :ref:`Xdebug <xdebug>`, :ref:`Blackfire <blackfire>`, :ref:`Tideways <tideways>`, :ref:`Flame Graph <flamegraph>`, :ref:`Bottleneck <bottleneck>`, :ref:`Micro-optimisation <micro-optimisation>`
