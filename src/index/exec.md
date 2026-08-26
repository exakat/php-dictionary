# exec
``exec()`` is used to execute a command with the underlying operating system. It is the equivalent of ``shell_exec()`` and back-ticks. 

``exec()`` has specific arguments to collect both the result of the command, one line per element in an array, and the resulting code. This differs from ``shell_exec()``, which only returns the result, and as a string.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html","name":"exec","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:12:28 +0000","dateModified":"Mon, 24 Aug 2026 07:12:28 +0000","description":"exec() is used to execute a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell_exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/back-tick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backtick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-exec.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system-call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellarg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellcmd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execve.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell-injection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.exec.php"},{"@type":"CreativeWork","name":"PHP shell_exec() vs exec() Function","url":"https:\/\/www.geeksforgeeks.org\/php\/php-shell_exec-vs-exec-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exec"}]}]}</script>
```php
<?php

$dir = exec('ls', $result);
print_r($result);

?>
```

**[Documentation](https://www.php.net/manual/en/function.exec.php)**
## See Also

+ [PHP shell_exec() vs exec() Function](https://www.geeksforgeeks.org/php/php-shell_exec-vs-exec-function/)

## Related

+ [shell\_exec()](shell_exec.html)
+ [Back-tick](back-tick.html)
+ [Back-tick](backtick.html)
+ [Execution](execution.html)
+ [Shell Exec](shell-exec.html)
+ [System Call](system-call.html)
+ [escapeshellarg()](escapeshellarg.html)
+ [escapeshellcmd()](escapeshellcmd.html)
+ [execve()](execve.html)
+ [Shell Injection](shell-injection.html)
