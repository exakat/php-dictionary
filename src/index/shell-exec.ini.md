# Shell Exec
Shell execution runs operating system commands from PHP code. Functions include ``shell_exec()``, ``exec()``, ``system()``, ``passthru()``, ``popen()``, and the backtick operator.

Using shell commands with user-supplied input without proper escaping is a critical security vulnerability enabling Remote Code Execution. Always use ``escapeshellarg()`` or ``escapeshellcmd()`` when building shell commands, or prefer purpose-built PHP functions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell-exec.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/shell-exec.ini.html","name":"Shell Exec","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 09:05:47 +0000","dateModified":"Thu, 02 Jul 2026 09:05:47 +0000","description":"Shell execution runs operating system commands from PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Shell Exec.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Dangerous: user input in shell command
    $file = $_GET['file'];
    $output = shell_exec('cat ' . $file); // RCE vulnerability
    
    // Safe: escape the argument
    $file = escapeshellarg($_GET['file']);
    $output = shell_exec('cat ' . $file);

?>
```

**[Documentation](https://www.php.net/manual/en/function.shell-exec.php)**
## See Also

+ [Command injection](https://owasp.org/www-community/attacks/Command_Injection)

## Related

+ [shell\_exec()](shell_exec.ini.html)
+ [Shell](shell.ini.html)
+ [exec](exec.ini.html)
+ [Remote Code Execution (RCE)](rce.ini.html)
+ [Security](security.ini.html)
+ [System Call](system-call.ini.html)
+ [Execution](execution.ini.html)
+ [SplSubject](splsubject.ini.html)
+ [escapeshellarg()](escapeshellarg.ini.html)
