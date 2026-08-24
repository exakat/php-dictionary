# Process
A process is an instance of a running program managed by the operating system. A process is executed by the web server, the operating system directly, or a worker, such as in a job queue.

A process has its own memory space, process identifier, and share nothing with other processes. It requires interprocess communications channels, such as files or sockets.

A process may spawn other processes, which may be fully independent, or act as a child process. It may also have threads, which act as child processes, though share memory with the parent process.

PHP manage processes with the pcntl extension, and some shell native functions, ``shell_exec()``, ``shell()``, back-ticks. It may also be managed directly by other process, such as web server or job queues.

A process may also be a consistent way for a team to work. For example, PHP development, bug processing, feature implementation, release. This is a human organization term.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html","name":"Process","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:12:28 +0000","dateModified":"Mon, 24 Aug 2026 07:12:28 +0000","description":"A process is an instance of a running program managed by the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html"]}],"keywords":["system","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jobqueue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/os.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl_signal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execve.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-nothing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worker.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Process"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"process"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Process)**
## Related

+ [Jobqueue](jobqueue.html)
+ [Thread](thread.html)
+ [System](os.html)
+ [Concurrency](concurency.html)
+ [pcntl\_signal()](pcntl_signal.html)
+ [Concurrency](concurrency.html)
+ [execve()](execve.html)
+ [Shared-Nothing Architecture](shared-nothing.html)
+ [Worker](worker.html)
