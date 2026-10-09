# Inter-Process Communication (IPC)
Inter-process communication, or IPC, is the set of mechanisms an operating system offers for two separate processes to exchange data or coordinate their work, since processes do not share memory with each other by default.

Common IPC mechanisms include pipes and named pipes, which stream bytes from one process to another; sockets, which work the same way across machines as within one; shared memory, where a block is mapped into several processes at once for fast access without copying; message queues, which store discrete messages for one or more readers to pick up; and semaphores, which coordinate access to a shared resource without transferring data themselves.

PHP scripts rarely need IPC directly, since most requests run as independent, short-lived processes with no data to share between them. Long-running PHP processes, workers spawned with the ``pcntl`` extension, or PHP code that talks to another service over a socket or a message queue, are the situations where IPC becomes directly relevant.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ipc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ipc.html","name":"Inter-Process Communication (IPC)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 18:46:58 +0000","dateModified":"Fri, 25 Sep 2026 18:46:58 +0000","description":"Inter-process communication, or IPC, is the set of mechanisms an operating system offers for two separate processes to exchange data or coordinate their work, since processes do not share memory with each other by default","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ipc.html"]}],"keywords":["acronym","concept","operating system"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/socket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pipe.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/message-queue.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Inter-process_communication"},{"@type":"CreativeWork","name":"stream_socket_pair() - PHP Manual","url":"https:\/\/www.php.net\/manual\/en\/function.stream-socket-pair.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ipc"}]}]}</script>
```php
<?php

    $sockets = stream_socket_pair(STREAM_PF_UNIX, STREAM_SOCK_STREAM, STREAM_IPPROTO_IP);
    $pid = pcntl_fork();

    if ($pid) {
        // Parent process.
        fclose($sockets[0]);
        fwrite($sockets[1], 'ping');
        echo fread($sockets[1], 1024);
        fclose($sockets[1]);
    } else {
        // Child process.
        fclose($sockets[1]);
        echo fread($sockets[0], 1024);
        fwrite($sockets[0], 'pong');
        fclose($sockets[0]);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Inter-process_communication)**
## See Also

+ [stream_socket_pair() - PHP Manual](https://www.php.net/manual/en/function.stream-socket-pair.php)

## Related

+ [Process Control (pcntl)](pcntl.html)
+ [Socket](socket.html)
+ [Process](process.html)
+ [Thread](thread.html)
+ [Shared Memory](shared-memory.html)
+ [Pipe ``|``, The Logical Operator](pipe.html)
+ [Message Queue](message-queue.html)
