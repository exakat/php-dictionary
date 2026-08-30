---
type: "PHP Feature"
title: "Shell Exec"
description: "Shell execution runs operating system commands from PHP code."
resource: "https://www.php.net/manual/en/function.shell-exec.php"
tags: ["security", "system", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/function.shell-exec.php](https://www.php.net/manual/en/function.shell-exec.php)

## See Also
- [Command injection](https://owasp.org/www-community/attacks/Command_Injection)

## Related
- [shell_exec()](/features/shell_exec.md)
- [Shell](/features/shell.md)
- [exec](/features/exec.md)
- [Remote Code Execution (RCE)](/features/rce.md)
- [Security](/features/security.md)
- [System Call](/features/system-call.md)
- [Execution](/features/execution.md)
- [SplSubject](/features/splsubject.md)
- [escapeshellarg()](/features/escapeshellarg.md)

