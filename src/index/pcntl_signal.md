# pcntl\_signal()
``pcntl_signal()`` installs a signal handler for a given OS signal. When the specified signal is received by the PHP process, the installed callable is executed.

Common signals include ``SIGTERM``, the graceful termination, ``SIGINT``, the Ctrl+C interrupt, ``SIGHUP``, the reload configuration, and ``SIGCHLD``, the child process state change. The constant ``SIG_DFL`` restores the default OS handler and ``SIG_IGN`` ignores the signal.

Signal handlers are not called immediately when a signal arrives: the engine checks for pending signals between opcodes. Calling ``pcntl_async_signals(true)`` enables asynchronous signal dispatching so that handlers run as soon as the signal is received, without waiting for the next opcode boundary.

``pcntl_signal()`` is available only in CLI SAPI and requires the ``pcntl`` extension.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl_signal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl_signal.html","name":"pcntl_signal()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:21:29 +0000","dateModified":"Thu, 02 Jul 2026 08:21:29 +0000","description":"pcntl_signal() installs a signal handler for a given OS signal","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl_signal.html"]}],"keywords":["native function","signal","process","cli"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system-event.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cli.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.pcntl-signal.php"},{"@type":"CreativeWork","name":"pcntl_async_signals()","url":"https:\/\/www.php.net\/manual\/en\/function.pcntl-async-signals.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pcntl_signal"}]}]}</script>
```php
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
```

**[Documentation](https://www.php.net/manual/en/function.pcntl-signal.php)**
## See Also

+ [pcntl_async_signals()](https://www.php.net/manual/en/function.pcntl-async-signals.php)

## Related

+ [Process Control (pcntl)](pcntl.html)
+ [PHP Handlers](handler.html)
+ [System Event](system-event.html)
+ [Process](process.html)
+ [Command Line Interface (CLI)](cli.html)
