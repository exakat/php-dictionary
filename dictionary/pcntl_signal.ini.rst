.. _pcntl_signal:
.. meta::
	:description:
		pcntl_signal(): ``pcntl_signal()`` installs a signal handler for a given OS signal.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: pcntl_signal()
	:twitter:description: pcntl_signal(): ``pcntl_signal()`` installs a signal handler for a given OS signal
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: pcntl_signal()
	:og:type: article
	:og:description: ``pcntl_signal()`` installs a signal handler for a given OS signal
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pcntl_signal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"pcntl_signal()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``pcntl_signal()`` installs a signal handler for a given OS signal","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pcntl_signal().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


pcntl_signal()
--------------

``pcntl_signal()`` installs a signal handler for a given OS signal. When the specified signal is received by the PHP process, the installed callable is executed.

Common signals include ``SIGTERM`` (graceful termination), ``SIGINT`` (Ctrl+C interrupt), ``SIGHUP`` (reload configuration), and ``SIGCHLD`` (child process state change). The constant ``SIG_DFL`` restores the default OS handler and ``SIG_IGN`` ignores the signal.

Signal handlers are not called immediately when a signal arrives: PHP checks for pending signals between opcodes. Calling ``pcntl_async_signals(true)`` enables asynchronous signal dispatching so that handlers run as soon as the signal is received, without waiting for the next opcode boundary.

``pcntl_signal()`` is available only in CLI SAPI and requires the ``pcntl`` extension.

.. code-block:: php
   
   <?php
   
   pcntl_async_signals(true);
   
   pcntl_signal(SIGTERM, function (int $signal): void {
       echo 'Received SIGTERM, shutting down gracefully.' . PHP_EOL;
       // Clean up resources, flush buffers, etc.
       exit(0);
   });
   
   pcntl_signal(SIGINT, function (int $signal): void {
       echo 'Received SIGINT (Ctrl+C).' . PHP_EOL;
       exit(0);
   });
   
   echo 'Running... send SIGTERM or press Ctrl+C' . PHP_EOL;
   while (true) {
       sleep(1);
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.pcntl-signal.php>`__

See also `pcntl_async_signals() <https://www.php.net/manual/en/function.pcntl-async-signals.php>`_.

Related : :ref:`Process Control (pcntl) <pcntl>`, :ref:`PHP Handlers <handler>`, :ref:`System Event <system-event>`, :ref:`Process <process>`, :ref:`Command Line Interface (CLI) <cli>`
