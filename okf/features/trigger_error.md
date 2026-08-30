---
type: "PHP Feature"
title: "trigger_error()"
description: "``trigger_error()`` is a PHP native function, which raises an error, in the style of PHP engine."
resource: "https://www.php.net/manual/en/function.trigger-error.php"
tags: ["error suppression"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# trigger_error()

``trigger_error()`` is a PHP native function, which raises an error, in the style of PHP engine. It can raise ``notice``, ``warning``, ``deprecated`` and ``error``.

```php
<?php

    echo $a;

    trigger_error('This is a warning, that says: Undefined variable $x', E_USER_WARNING);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.trigger-error.php](https://www.php.net/manual/en/function.trigger-error.php)

## See Also
- [The trigger_error Function](https://code.mu/en/php/manual/error/trigger_error/)

## Related
- [@, No Scream Operator](/features/noscream.md)
- [Error Reporting](/features/error-reporting.md)
- [set_error_handler()](/features/set_error_handler.md)

