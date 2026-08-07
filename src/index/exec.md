# exec
``exec()`` use used to execute a command with the underlying operating system. It is the equivalent of ``shell_exec()`` and back-ticks. 

``exec()`` has specific arguments to collect both the result of the command, one line per element in an array, and the resulting code. This differs from ``shell_exec()``, which only returns the result, and as a string.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html","name":"exec","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:02 +0000","dateModified":"Fri, 19 Jun 2026 21:25:02 +0000","description":"``exec()`` use used to execute a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exec.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"exec"}]}]}</script>
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
