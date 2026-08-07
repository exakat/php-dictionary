# Shell
A shell is a program that provides an interface for users to interact with the operating system and execute commands. It acts as a command interpreter, taking input from the user, interpreting it, and then executing the appropriate actions.

PHP is able to relay commands to the OS using dedicated local functions, such as ``shell_exec()``, ``exec()``, ``system()``, ``passthru()`` and the back-tick operator \`. It is also able to access remote shells with the ``ssh://`` protocol.

Shells provide a important access to the underlying OS: they are considered as a critical point of entry for security attacks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell.html","name":"Shell","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:05:19 +0000","dateModified":"Sun, 02 Aug 2026 06:05:19 +0000","description":"A shell is a program that provides an interface for users to interact with the operating system and execute commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Shell.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Shell"}]}]}</script>
```php
<?php

    $output = shell_exec('ls -lart');
    echo "<pre>$output</pre>";

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Shell_(computing))**
## Related

+ [Process Control (pcntl)](pcntl.html)
+ [Shell Exec](shell-exec.html)

## Related packages

+ [psy/psysh](https://packagist.org/packages/psy/psysh)
