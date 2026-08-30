---
type: "PHP Feature"
title: "Back-tick"
description: "Back-ticks are only used to execute a command with the underlying operating system."
resource: "https://www.php.net/manual/en/language.operators.execution.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Back-tick

Back-ticks are only used to execute a command with the underlying operating system. They are the equivalent of ``shell_exec()``. 

Since PHP 8.5, they are deprecated, and should be replaced with a call to ``shell_exec()`` or ``exec()``.

```php
<?php

$dir = `ls`;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.execution.php](https://www.php.net/manual/en/language.operators.execution.php)

## See Also
- [Backtick Operator to Run Shell Command is Deprecated in PHP 8.5](https://lindevs.com/backtick-operator-to-run-shell-command-is-deprecated-in-php-8-5)
- [PHP RFC: Deprecate backtick operator](https://wiki.php.net/rfc/deprecate-backtick-operator-v2)

## Related
- [shell_exec()](/features/shell_exec.md)
- [exec](/features/exec.md)
- [System](/features/system.md)

## Details
- Deprecated: 8.5

