---
type: "PHP Feature"
title: "shell_exec()"
description: "``shell_exec()`` executes a command with the underlying operating system."
resource: "https://www.php.net/manual/en/function.shell-exec.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# shell_exec()

``shell_exec()`` executes a command with the underlying operating system. They are the equivalent of the backtick operator `` \` ``.

The command has to be passed as a string. The result is returned also as a string, or a ``null`` when the command fails.

```php
<?php

    $dir = shell_exec('ls');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.shell-exec.php](https://www.php.net/manual/en/function.shell-exec.php)

## See Also
- [Explain the Difference Between shell_exec() and exec() Functions](https://www.geeksforgeeks.org/php/explain-the-difference-between-shell_exec-and-exec-functions/)
- [PHP shell_exec Function: How to Use It [With Examples]](https://www.linuxscrew.com/php-shell-exec)

## Related
- [Back-tick](/features/backtick.md)
- [exec](/features/exec.md)
- [Shell Exec](/features/shell-exec.md)
- [Secure Shell (SSH)](/features/ssh.md)
- [System](/features/system.md)

