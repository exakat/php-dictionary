---
type: "PHP Feature"
title: "Error Suppression"
description: "Error suppression is achieved with the ``@`` operator placed before an expression."
resource: "https://www.php.net/manual/en/language.operators.errorcontrol.php"
tags: ["error", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Error Suppression

Error suppression is achieved with the ``@`` operator placed before an expression. It silences any error, warning, or notice that expression might produce.

Using ``@`` is widely considered bad practice: it hides bugs, degrades performance, and makes debugging harder. Better alternatives include proper validation, try/catch blocks, or a custom error handler.

The ``scream`` extension and ``scream.enabled`` ini directive can disable the ``@`` operator entirely.

```php
<?php

    // Bad practice: silences errors
    $result = @file_get_contents('missing.txt');
    
    // Better: check first
    if (file_exists('missing.txt')) {
        $result = file_get_contents('missing.txt');
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.errorcontrol.php](https://www.php.net/manual/en/language.operators.errorcontrol.php)

## See Also
- [set_error_handler](https://www.php.net/manual/en/function.set-error-handler.php)
- [PHP: The Right Way — Errors & Exceptions](https://phptherightway.com/#errors_exceptions)

## Related
- [Error](/features/error.md)
- [@, No Scream Operator](/features/noscream.md)
- [Error Handling](/features/error-handling.md)
- [Operators](/features/operator.md)
- [Error Reporting](/features/error-reporting.md)
- [Appeasement Pattern](/features/appeasement-pattern.md)
- [SplSubject](/features/splsubject.md)

