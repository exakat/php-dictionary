---
type: "PHP Feature"
title: "Shell"
description: "A shell is a program that provides an interface for users to interact with the operating system and execute commands."
resource: "https://en.wikipedia.org/wiki/Shell_(computing)"
tags: ["system"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Shell

A shell is a program that provides an interface for users to interact with the operating system and execute commands. It acts as a command interpreter, taking input from the user, interpreting it, and then executing the appropriate actions.

PHP is able to relay commands to the OS using dedicated local functions, such as ``shell_exec()``, ``exec()``, ``system()``, ``passthru()`` and the back-tick operator \`. It is also able to access remote shells with the ``ssh://`` protocol.

Shells provide an important access to the underlying OS: they are considered as a critical point of entry for security attacks.

```php
<?php

    $output = shell_exec('ls -lart');
    echo "<pre>$output</pre>";

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Shell_(computing)](https://en.wikipedia.org/wiki/Shell_(computing))

## See Also
- [The Shell Command Interpreter](https://www.learnlinux.org.za/courses/build/fundamentals/ch04s04.html)

## Related
- [Process Control (pcntl)](/features/pcntl.md)
- [Shell Exec](/features/shell-exec.md)

## Details
- Packagist: [psy/psysh](https://packagist.org/packages/psy/psysh)

