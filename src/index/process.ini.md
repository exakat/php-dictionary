# Process
A process is an instance of a running program managed by the operating system. A process is executed by the web server, the operating system directly, or a worker, such as in a job queue.

A process has its own memory space, process identifier, and share nothing with other processes. It requires interprocess communications channels, such as files or sockets.

A process may spawn other processes, which may be fully independent, or act as a child process. It may also have threads, which act as child processes, though share memory with the parent process.

PHP manage processes with the pcntl extension, and some shell native functions, ``shell_exec()``, ``shell()``, back-ticks. It may also be managed directly by other process, such as web server or job queues.

A process may also be a consistent way for a team to work. For example, PHP development, bug processing, feature implementation, release. This is a human organization term.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/process.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/process.ini.html","name":"Process","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:02:24 +0000","dateModified":"Mon, 20 Jul 2026 17:02:24 +0000","description":"A process is an instance of a running program managed by the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Process.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Process)**
## Related

+ [Jobqueue](jobqueue.ini.html)
+ [Thread](thread.ini.html)
+ [System](os.ini.html)
+ [Concurrency](concurency.ini.html)
+ [pcntl\_signal()](pcntl_signal.ini.html)
