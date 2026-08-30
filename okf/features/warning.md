---
type: "PHP Feature"
title: "Warning"
description: "A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point."
resource: "https://www.php.net/manual/en/errorfunc.constants.php"
tags: ["error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Warning

A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point.

Warnings are one of the error reporting levels, between error and notice.

```php
<?php

include 'unknown-file.php'; // Warning, failed to open stream unknown-file.php

?>
```

## Documentation
- [https://www.php.net/manual/en/errorfunc.constants.php](https://www.php.net/manual/en/errorfunc.constants.php)

## See Also
- [Dealing with Warnings in PHP, the Right Way](https://nyamsprod.com/blog/dealing-with-warnings-in-php-the-right-way/)

## Related
- [Error](/features/error.md)
- [Notice](/features/notice.md)
- [Error Reporting](/features/error-reporting.md)
- [Fatal Error](/features/fatal-error.md)

