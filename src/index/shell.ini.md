# Shell
A shell is a program that provides an interface for users to interact with the operating system and execute commands. It acts as a command interpreter, taking input from the user, interpreting it, and then executing the appropriate actions.

PHP is able to relay commands to the OS using dedicated local functions, such as ``shell_exec()``, ``exec()``, ``system()``, ``passthru()`` and the back-tick operator \`. It is also able to access remote shells with the ``ssh://`` protocol.

Shells provide a important access to the underlying OS: they are considered as a critical point of entry for security attacks.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell.ini.html","name":"Shell","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:05:19 +0000","dateModified":"Sun, 02 Aug 2026 06:05:19 +0000","description":"A shell is a program that provides an interface for users to interact with the operating system and execute commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Shell.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $output = shell_exec('ls -lart');
    echo "<pre>$output</pre>";

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Shell_(computing))**
## Related

+ [Process Control (pcntl)](pcntl.ini.html)
+ [Shell Exec](shell-exec.ini.html)

## Related packages

+ [psy/psysh](https://packagist.org/packages/psy/psysh)
