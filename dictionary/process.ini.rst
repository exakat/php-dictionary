.. _process:
.. meta::
	:description:
		Process: A process is an instance of a running program managed by the operating system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Process
	:twitter:description: Process: A process is an instance of a running program managed by the operating system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Process
	:og:type: article
	:og:description: A process is an instance of a running program managed by the operating system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/process.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Process","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 09:01:25 +0000","dateModified":"Fri, 06 Feb 2026 09:01:25 +0000","description":"A process is an instance of a running program managed by the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Process.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Process
-------

A process is an instance of a running program managed by the operating system. A process is executed by the web server, the operating system directly, or a worker (such as in a job queue).

A process has its own memory space, process identifier, and share nothing with other processes. It requires interprocess communications channels, such as files or sockets.

A process may spawn other processes, which may be fully independant, or act as a child process. It may also have threads, which act as child processes, though share memory with the parent process.

PHP manage processes with the pcntl extension, and some shell native functions (``shell_exec()``, ``shell()``, back-ticks). It may also be managed directly by other process, such as web server or job queues.

A process may also be a consistent way for a team to work: PHP development, bug processing, feature implementation, release. This is a human organization term.

`Documentation <https://en.wikipedia.org/wiki/Process>`__

Related : :ref:`Jobqueue <jobqueue>`, :ref:`Thread <thread>`, 
