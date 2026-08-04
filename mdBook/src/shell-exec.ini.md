# Shell Exec
Shell execution runs operating system commands from PHP code. Functions include ``shell_exec()``, ``exec()``, ``system()``, ``passthru()``, ``popen()``, and the backtick operator.

Using shell commands with user-supplied input without proper escaping is a critical security vulnerability enabling Remote Code Execution. Always use ``escapeshellarg()`` or ``escapeshellcmd()`` when building shell commands, or prefer purpose-built PHP functions.
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

## See Also

+ [Command injection](https://owasp.org/www-community/attacks/Command_Injection)

Related : [shell_exec()](shell_exec()), [Shell](Shell), [exec](exec), [Remote Code Execution (RCE)](Remote Code Execution (RCE)), [Security](Security), [System Call](System Call), [Execution](Execution), [SplSubject](SplSubject), [escapeshellarg()](escapeshellarg())
