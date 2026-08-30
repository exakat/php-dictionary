---
type: "PHP Feature"
title: "System"
description: "The system, or the operating system, is the environment where PHP is running."
resource: "https://www.php.net/manual/en/function.system.php"
tags: ["system"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# System

The system, or the operating system, is the environment where PHP is running. It might be ``Linux``, ``MacOSX``, ``Windows``, ``Debian`` etc. The system provides specific features, such as access to the file system, or a shell to run commands.

``system()`` is also a PHP native function, which execute a system command, and immediately display it to the standard output. It is usually recommended to use ``shell_exec()``, which returns the results, rather than display it.

```php
<?php

// use a system command to get the name of the underlying OS name
echo shell_exec('cat /etc/os-releaselsb_release –ahostnamectl');

// same as above
system('cat /etc/os-releaselsb_release –ahostnamectl');

?>
```

## Documentation
- [https://www.php.net/manual/en/function.system.php](https://www.php.net/manual/en/function.system.php)

## See Also
- [statgrab](https://github.com/iliaal/statgrab)

## Related
- [shell_exec()](/features/shell_exec.md)
- [Back-tick](/features/backtick.md)
- [Execution](/features/execution.md)
- [System Call](/features/system-call.md)

