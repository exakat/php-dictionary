# Execution
Execution refers to the ability to run code or system commands dynamically at runtime. There is the execution of PHP code, and the execution of external code from within PHP.

Language-level code execution uses ``eval()``, which parses and executes a PHP string as code. System-level execution delegates to the operating system shell via ``exec()``, ``shell_exec()``, ``system()``, ``passthru()``, ``popen()``, or the backtick operator.

The execution of PHP code is based on the PHP engine, though it may also be achieved by other PHP runtimes, or be delegated to other engine via transpiling of the code.

The flow of execution may be hijacked by a code injection, which route the execution to arbitrary code. It is a security vulnerability.

```php
<?php

    // DANGEROUS: user-controlled input passed to eval()
    $template = $_GET['tpl'];
    eval('echo ' . $template . ';');  // RCE risk

    // DANGEROUS: user input in a shell command
    $file = $_GET['file'];
    exec('ls ' . $file);              // command injection risk

    // SAFER: escape shell arguments
    $file = escapeshellarg($_GET['file']);
    exec('ls ' . $file);

?>
```

## See Also

+ [PHP: exec](https://www.php.net/manual/en/function.exec.php)

Related : [Eval()](Eval()), [exec](exec), [Shell Exec](Shell Exec), [System](System), [Virtual Machine (VM)](Virtual Machine (VM)), [Code Injection](Code Injection), [Remote Code Execution (RCE)](Remote Code Execution (RCE)), [Lifecycle](Lifecycle), [Order Of Execution](Order Of Execution)
