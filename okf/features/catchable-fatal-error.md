---
type: "PHP Feature"
title: "Catchable Fatal Error"
description: "A catchable fatal error is a fatal error that PHP allows user code to intercept before the script terminates, instead of stopping execution unconditionally."
resource: "https://www.php.net/manual/en/language.errors.php7.php"
tags: ["error", "specification"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Catchable Fatal Error

A catchable fatal error is a fatal error that PHP allows user code to intercept before the script terminates, instead of stopping execution unconditionally.

Since PHP 7, most fatal errors are represented as ``Error`` objects, which implement ``Throwable`` and can be intercepted with a ``try``/``catch`` block, making them catchable by nature. Before PHP 7, a narrower category existed as its own error level, ``E_RECOVERABLE_ERROR``, notably raised when an object without a ``__toString()`` method was used in a string context; it could only be intercepted through a custom error handler set with ``set_error_handler()``, not with ``catch``.

If a catchable fatal error is not actually caught, it behaves exactly like an ordinary fatal error: execution stops.

```php
<?php

    class NoConversion {}
    
    try {
        $s = (string) new NoConversion(); // fatal error, but catchable
    } catch (\Error $e) {
        echo 'Caught: ' . $e->getMessage();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.errors.php7.php](https://www.php.net/manual/en/language.errors.php7.php)

## See Also
- [PHP Language Specification: Terms and Definitions](https://phplang.org/spec/03-terms-and-definitions.html)

## Related
- [Fatal Error](/features/fatal-error.md)
- [Error](/features/error.md)
- [Throwable](/features/throwable.md)
- [set_error_handler()](/features/set_error_handler.md)

