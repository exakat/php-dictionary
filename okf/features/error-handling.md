---
type: "PHP Feature"
title: "Error Handling"
description: "Error handling is a broad concept that covers the different ways that PHP uses to signal that an error occurred."
resource: "https://www.php.net/manual/en/ref.errorfunc.php"
tags: ["error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Error Handling

Error handling is a broad concept that covers the different ways that PHP uses to signal that an error occurred. 

The main systems are the error reporting, and the exceptions. 

The error reporting is often associated with native errors, although it is possible to raise them and handle them with error-handlers.

The exception system is based on the throw, try and catch keywords.

```php
<?php

    trigger_error('Cannot do this', E_USER_ERROR);
    
    try {
        throw new Exception('Cannot do this');
    } catch (Exception $e) {
        print $e->getMessage();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/ref.errorfunc.php](https://www.php.net/manual/en/ref.errorfunc.php)

## See Also
- [PHP Error Handling and Exceptions: Best practices for robust applications](https://roman-huliak.medium.com/php-error-handling-and-exceptions-best-practices-for-robust-applications-c02cf5e225f7)

## Related
- [Exception](/features/exception.md)
- [Error Handler](/features/error-handler.md)
- [Downtime](/features/downtime.md)
- [Fatal Error](/features/fatal-error.md)
- [Rollback](/features/rollback.md)
- [Troubleshoot](/features/troubleshoot.md)
- [Error Suppression](/features/error-suppression.md)

