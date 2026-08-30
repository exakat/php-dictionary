---
type: "PHP Feature"
title: "Fatal Error"
description: "Fatal error is a type of PHP error, which ends the execution of the application."
resource: "https://www.php.net/manual/en/language.errors.php7.php"
tags: ["error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fatal Error

Fatal error is a type of PHP error, which ends the execution of the application. Fatal errors may be caught before ending the execution with a ``catch`` clause on ``Error``.

```php
<?php

    try {
        1 + [];
    } catch (Error $e) {
        print A fatal error was caught.;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.errors.php7.php](https://www.php.net/manual/en/language.errors.php7.php)

## See Also
- [A Guide to: PHP Fatal errors](https://trunc.org/learning/php-fatal-errors)

## Related
- [Catchable Fatal Error](/features/catchable-fatal-error.md)
- [Deprecation](/features/deprecation.md)
- [Error](/features/error.md)
- [Error Handling](/features/error-handling.md)
- [Exception](/features/exception.md)
- [Notice](/features/notice.md)
- [Try-catch](/features/try-catch.md)
- [Warning](/features/warning.md)
- [Lint, Won't Execute](/features/lint-wont-execute.md)
- [Method Compatibility](/features/method-compatibility.md)

