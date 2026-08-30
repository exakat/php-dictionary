---
type: "PHP Feature"
title: "exec"
description: "``exec()`` is used to execute a command with the underlying operating system."
resource: "https://www.php.net/manual/en/function.exec.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# exec

``exec()`` is used to execute a command with the underlying operating system. It is the equivalent of ``shell_exec()`` and back-ticks. 

``exec()`` has specific arguments to collect both the result of the command, one line per element in an array, and the resulting code. This differs from ``shell_exec()``, which only returns the result, and as a string.

```php
<?php

$dir = exec('ls', $result);
print_r($result);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.exec.php](https://www.php.net/manual/en/function.exec.php)

## See Also
- [PHP shell_exec() vs exec() Function](https://www.geeksforgeeks.org/php/php-shell_exec-vs-exec-function/)

## Related
- [shell_exec()](/features/shell_exec.md)
- [Back-tick](/features/backtick.md)
- [Execution](/features/execution.md)
- [Shell Exec](/features/shell-exec.md)
- [System Call](/features/system-call.md)
- [escapeshellarg()](/features/escapeshellarg.md)
- [escapeshellcmd()](/features/escapeshellcmd.md)
- [execve()](/features/execve.md)
- [Shell Injection](/features/shell-injection.md)

## Details
- Extension: ext-system

