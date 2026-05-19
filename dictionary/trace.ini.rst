.. _trace:
.. _stack-trace:
.. meta::
	:description:
		Trace: A trace is the list of called functions during an execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Trace
	:twitter:description: Trace: A trace is the list of called functions during an execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Trace
	:og:type: article
	:og:description: A trace is the list of called functions during an execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/trace.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Trace","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 18 May 2026 09:14:55 +0000","dateModified":"Mon, 18 May 2026 09:14:55 +0000","description":"A trace is the list of called functions during an execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Trace.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Trace
-----

A trace is the list of called functions during an execution. It lists all the code that was executed, and helps with debugging.

In PHP, a trace is automatically calculated with an exception, or the function ``debug_backtrace()``. This shows the stack trace at the error point.

Other tools, like xDebug or php-trace, build the callgraph over the execution of the whole code, not only on errors.

.. code-block:: php
   
   <?php
   
   function c() {
       throw new Exception(Something went wrong);
   }
   function a() { b(); }
   function b() { c(); }
   
   a();
   
   /**
   Fatal error: Uncaught Exception: Something went wrong in file.php:3
   Stack trace:
   #0 file.php(7): c()
   #1 file.php(11): b()
   #2 file.php(14): a()
   #3 {main}
   */
   ?>


`Documentation <https://en.wikipedia.org/wiki/Stack_trace>`__

See also https://github.com/Chris-Kol/php-trace

Related : :ref:`debug_backtrace() <debug_backtrace>`, :ref:`Audit Trail <audit-trail>`, :ref:`Xdebug <xdebug>`, :ref:`Flame Graph <flamegraph>`
