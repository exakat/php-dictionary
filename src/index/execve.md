# execve()
``execve()`` is the underlying Unix system call that replaces the currently running process's program, code, data, heap and stack, with a new one. Unlike forking, no new process is created: the process keeps the same PID, but everything it was running is discarded and replaced.

``pcntl_exec()`` is a thin wrapper around ``execve()``. This makes it fundamentally different from ``exec()`` or ``shell_exec()``, which spawn a separate child process and return control to the calling PHP script once it finishes. Once ``pcntl_exec()`` succeeds, the PHP script that called it stops existing: there is no code left afterwards to return to, unless the call itself fails.

``pcntl_exec()`` is typically used to replace a PHP worker process with another program after preparation work, such as setting up file descriptors or dropping privileges, has been done in the process.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execve.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execve.html","name":"execve()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 11:41:20 +0000","dateModified":"Tue, 25 Aug 2026 11:41:20 +0000","description":"execve() is the underlying Unix system call that replaces the currently running process's program, code, data, heap and stack, with a new one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execve.html"]}],"keywords":["native function","system"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system-call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.pcntl-exec.php"},{"@type":"CreativeWork","name":"Exec (system call) - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Exec_(system_call)"},{"@type":"CreativeWork","name":"Running programs in the current process space: pcntl_exec()","url":"http:\/\/www.hackingwithphp.com\/16\/1\/8\/running-programs-in-the-current-process-space"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"execve"}]}]}</script>
```php
<?php

    // Everything below this call never runs if pcntl_exec() succeeds:
    // the PHP process is replaced in place by /usr/bin/php-fpm.
    pcntl_exec('/usr/bin/php-fpm', ['--nodaemonize'], ['ENV' => 'production']);

    // Only reached if execve() itself failed
    exit('exec failed');

?>
```

**[Documentation](https://www.php.net/manual/en/function.pcntl-exec.php)**
## See Also

+ [Exec (system call) - Wikipedia](https://en.wikipedia.org/wiki/Exec_(system_call))
+ [Running programs in the current process space: pcntl_exec()](http://www.hackingwithphp.com/16/1/8/running-programs-in-the-current-process-space)

## Related

+ [exec](exec.html)
+ [Shell Exec](shell-exec.html)
+ [System Call](system-call.html)
+ [Process](process.html)
+ [Execution](execution.html)
+ [Process Control (pcntl)](pcntl.html)
