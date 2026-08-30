---
type: "PHP Feature"
title: "execve()"
description: "``execve()`` is the underlying Unix system call that replaces the currently running process's program, code, data, heap and stack, with a new one."
resource: "https://www.php.net/manual/en/function.pcntl-exec.php"
tags: ["native function", "system"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# execve()

``execve()`` is the underlying Unix system call that replaces the currently running process's program, code, data, heap and stack, with a new one. Unlike forking, no new process is created: the process keeps the same PID, but everything it was running is discarded and replaced.

``pcntl_exec()`` is a thin wrapper around ``execve()``. This makes it fundamentally different from ``exec()`` or ``shell_exec()``, which spawn a separate child process and return control to the calling PHP script once it finishes. Once ``pcntl_exec()`` succeeds, the PHP script that called it stops existing: there is no code left afterwards to return to, unless the call itself fails.

``pcntl_exec()`` is typically used to replace a PHP worker process with another program after preparation work, such as setting up file descriptors or dropping privileges, has been done in the process.

```php
<?php

    // Everything below this call never runs if pcntl_exec() succeeds:
    // the PHP process is replaced in place by /usr/bin/php-fpm.
    pcntl_exec('/usr/bin/php-fpm', ['--nodaemonize'], ['ENV' => 'production']);

    // Only reached if execve() itself failed
    exit('exec failed');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.pcntl-exec.php](https://www.php.net/manual/en/function.pcntl-exec.php)

## See Also
- [Exec (system call) - Wikipedia](https://en.wikipedia.org/wiki/Exec_(system_call))
- [Running programs in the current process space: pcntl_exec()](http://www.hackingwithphp.com/16/1/8/running-programs-in-the-current-process-space)

## Related
- [exec](/features/exec.md)
- [Shell Exec](/features/shell-exec.md)
- [System Call](/features/system-call.md)
- [Process](/features/process.md)
- [Execution](/features/execution.md)
- [Process Control (pcntl)](/features/pcntl.md)

## Details
- Extension: ext-pcntl

