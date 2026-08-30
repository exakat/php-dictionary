---
type: "PHP Feature"
title: "escapeshellarg()"
description: "``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command."
resource: "https://www.php.net/manual/en/function.escapeshellarg.php"
tags: ["security", "function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# escapeshellarg()

``escapeshellarg()`` is a PHP function that wraps a string in single quotes and escapes any existing single quotes within it, making the string safe to pass as a single argument to a shell command.

It is used together with ``exec()``, ``system()``, ``passthru()``, or ``shell_exec()`` when the argument is derived from user input or any untrusted source.

On Windows, ``escapeshellarg()`` uses double quotes and escapes double quotes, percent signs, and exclamation marks instead.

Note that ``escapeshellarg()`` escapes a single argument only. When the full command string needs to be sanitised, ``escapeshellcmd()`` should be used, though combining both functions correctly is preferred.

```php
<?php

    $filename = $_GET['file'] ?? '';
    $safe     = escapeshellarg($filename);
    
    // Safe: $safe is a quoted, escaped argument
    exec('convert ' . $safe . ' output.png', $output, $exitCode);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.escapeshellarg.php](https://www.php.net/manual/en/function.escapeshellarg.php)

## See Also
- [escapeshellcmd() — PHP Manual](https://www.php.net/manual/en/function.escapeshellcmd.php)

## Related
- [Escape Data](/features/escape-data.md)
- [Injection](/features/injection.md)
- [Shell Injection](/features/shell-injection.md)
- [exec](/features/exec.md)
- [System](/features/system.md)
- [Shell Exec](/features/shell-exec.md)
- [escapeshellcmd()](/features/escapeshellcmd.md)
- [Security](/features/security.md)

