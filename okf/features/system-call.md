---
type: "PHP Feature"
title: "System Call"
description: "A system call is a call to an operating system function."
resource: "https://en.wikipedia.org/wiki/System_call"
tags: ["system"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# System Call

A system call is a call to an operating system function. Those calls are done with the ``shell_exec()``, ``system()`` and ``exec()`` functions; and the `` \` `` back tick operators.

```php
<?php

    // list files
    $list = shell_exec('ls -1');

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/System_call](https://en.wikipedia.org/wiki/System_call)

## See Also
- [Web Shells 101 Using PHP (Web Shells Part 2)](https://www.acunetix.com/blog/articles/web-shells-101-using-php-introduction-web-shells-part-2/)

## Related
- [System](/features/system.md)
- [exec](/features/exec.md)
- [Shell Exec](/features/shell-exec.md)
- [Webshell](/features/webshell.md)

