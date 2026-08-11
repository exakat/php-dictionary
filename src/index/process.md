# Process
A process is an instance of a running program managed by the operating system. A process is executed by the web server, the operating system directly, or a worker, such as in a job queue.

A process has its own memory space, process identifier, and share nothing with other processes. It requires interprocess communications channels, such as files or sockets.

A process may spawn other processes, which may be fully independent, or act as a child process. It may also have threads, which act as child processes, though share memory with the parent process.

PHP manage processes with the pcntl extension, and some shell native functions, ``shell_exec()``, ``shell()``, back-ticks. It may also be managed directly by other process, such as web server or job queues.

A process may also be a consistent way for a team to work. For example, PHP development, bug processing, feature implementation, release. This is a human organization term.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html","name":"Process","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:02:24 +0000","dateModified":"Mon, 20 Jul 2026 17:02:24 +0000","description":"A process is an instance of a running program managed by the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Process.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"process"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Process)**
## Related

+ [Jobqueue](jobqueue.html)
+ [Thread](thread.html)
+ [System](os.html)
+ [Concurrency](concurency.html)
+ [pcntl\_signal()](pcntl_signal.html)
